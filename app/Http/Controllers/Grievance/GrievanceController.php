<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Kreait\Firebase\Database;

class GrievanceController extends Controller
{
    protected $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function createGrievance()
    {
        $req = request();

        $grievance = [
            'title' => $req->title,
            'description' => $req->description,
            'status' => $req->status,
            'category' => $req->category,
            'remarks' => '',
            'user_id' => '1',
            'department_id' => '1',
            'location' => $req->location,
        ];

        $this->database->getReference('grievances')->push($grievance);
        return response()->json([
            'message' => 'Test created successfully'
        ], 201);
    }

    public function getGrievances()
    {
        $grievances = $this->database->getReference('grievances')->getValue();
        return response()->json($grievances);
    }
}
