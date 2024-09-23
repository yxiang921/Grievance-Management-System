<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Grievance;

class GrievanceController extends Controller
{

    // C: Create grievance
    // R: Read grievance
    // U: Update grievance
    // D: Delete grievance

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
}
