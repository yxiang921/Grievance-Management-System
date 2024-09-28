<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Grievance;

class GrievanceApiController extends Controller
{

    // C: Create grievance 201
    // R: Read grievance 200
    // U: Update grievance 200
    // D: Delete grievance 200

    public function __construct()
    {
    }

    public function createGrievance()
    {
        $req = request();

        try {

            $validateData = $req->validate([
                'title' => 'required',
                'description' => 'required',
                'status' => 'required',
                'category' => 'required',
                'location' => 'required',
                'department_id' => 'required',
                'user_id' => 'required',
            ]);

            $grievance = Grievance::create([
                'title' => $validateData['title'],
                'description' => $validateData['description'],
                'status' => $validateData['status'],
                'category' => $validateData['category'],
                'location' => $validateData['location'],
                'department_id' => $validateData['department_id'],
                'user_id' => $validateData['user_id'],
            ]);

            return response()->json([
                'message' => 'Grievance created successfully',
                'grievance' => $grievance,
            ], 201);

        } catch (\Exception $e) {


            return response()->json([
                'message' => 'Error: ' . $e->getMessage(),
            ], 400);
        }

    }

    public function getGrievances()
    {

        try {
            $grievances = Grievance::all()->where('user_id', '=', '1');

            return response()->json([
                'message' => 'Grievances fetched successfully',
                'grievances' => $grievances,
            ], 200);

        } catch (\Exception $e) {

            return response()->json([
                'message' => 'Error: ' . $e->getMessage(),
            ], 400);

        }


    }

    public function deleteGrievance()
    {
        $req = request();

        try {
            $validateData = $req->validate([
                'id' => 'required',
            ]);

            $grievance = Grievance::find($validateData['id']);

            if ($grievance) {
                $grievance->delete();
                return response()->json([
                    'message' => 'Grievance deleted successfully',
                ], 200);
            } else {
                return response()->json([
                    'message' => 'Grievance not found',
                ], 404);
            }

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage(),
            ], 400);
        }
    }

    public function updateGrievance()
    {
        $req = request();

        try {

            $validateData = $req->validate([
                'id' => 'required',
                'title' => 'required',
                'description' => 'required',
                'status' => 'required',
                'category' => 'required',
                'location' => 'required',
                'department_id' => 'required',
                'user_id' => 'required',
            ]);

            $grievance = Grievance::find($validateData['id']);

            if(!$grievance){
                return response()->json([
                    'message' => 'Grievance not found',
                ], 404);
            }

            $grievance->title = $validateData['title'];
            $grievance->description = $validateData['description'];
            $grievance->status = $validateData['status'];
            $grievance->category = $validateData['category'];
            $grievance->location = $validateData['location'];
            $grievance->department_id = $validateData['department_id'];
            $grievance->user_id = $validateData['user_id'];
            
            $grievance->save();

            return response()->json([
                'message' => 'Grievance updated successfully',
                'grievance' => $grievance,
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Error: ' . $th->getMessage(),
            ], 400);
        }
    }
}
