<?php

namespace App\Http\Controllers\API;

use App\Events\NewGrievance;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use App\Models\Grievance;

class GrievanceApiController extends Controller
{
    public function __construct(){

    }

    public function addGrievance(){
        $req = request();

        req->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string',
            'status' => 'Received',
            'image' => 'required|image',
        ]);

        $grievance = Grievance::create([
            'title' => $req->title,
            'description' => $req->description,
            'location' => $req->location,
            'status' => $req->status,
            'image' => $req->image,
        ]);

        return response()->json([
            'message' => 'Grievance created successfully',
            'user' => $user
        ], 201);
    }

    public function showGrievance(){
        $grievances = Grievance::select("title", "status","create_at")->get();
        return response()->json($grievances, 200);
    }

    public function showGrievanceDetails($id){
        $grievance = Grievance::find($id);
        return response()->json($grievance, 200);
    }
}
