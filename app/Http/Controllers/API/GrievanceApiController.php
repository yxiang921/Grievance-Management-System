<?php

namespace App\Http\Controllers\API;

use App\Events\NewGrievance;
use App\Http\Controllers\Controller;
use App\Models\User;
use DB;
use Illuminate\Http\Request;

use App\Models\Grievance;

class GrievanceApiController extends Controller
{
    public function __construct()
    {

    }

    public function addGrievance()
    {
        $req = request();

        $req->validate([
            'userID' => 'required|string',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            
        ]);

        if ($req->hasFile('image')) {
            $req->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,mp4|max:102400',
            ]);

            $image = $req->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('uploads'), $imageName);
            $imagePath = 'uploads/' . $imageName;
        } else {
            $imagePath = null;
        }


        $grievance = Grievance::create([
            'user_id' => $req->userID,
            'title' => $req->title,
            'description' => $req->description,
            'status' => 'Received',
            'grievance_image' => $imagePath,
            'latitude' => $req->latitude,
            'longitude' => $req->longitude,
        ]);

        $user = User::find($req->userID);

        broadcast(new NewGrievance($grievance, $user))->toOthers();

        return response()->json([
            'message' => 'Grievance created successfully',
            'data' => $grievance,
            'grievanceID' => $grievance->id
            // 'user' => $user
        ], 200);
    }

    public function showGrievance($userID)
    {
        $grievances = DB::table('grievances')
            ->where('user_id', $userID)
            ->get();

        return response()->json($grievances, 200);
    }

    public function showGrievanceDetails($id)
    {
        $grievance = Grievance::find($id);
        return response()->json($grievance, 200);
    }
}
