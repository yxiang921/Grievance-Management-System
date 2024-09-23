<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Grievance;

class GrievanceController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Grievance Controller Index',
        ]);
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
}
