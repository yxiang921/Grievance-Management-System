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

    // 创建新测试条目
    public function createGrievance()
    {
        $r = request();
        $grievance = [
            'title' => $r['title'],
            'description' => $r['description'],
            'category' => $r['category'],
            'status' => $r['status'],
            'user_id' => $r['user_id'],
            'department_id' => $r['department_id'],
            'location' => $r['location'],
        ];

        $this->database->getReference('grievances')->push($grievance);
        return response()->json(['message' => 'Test created successfully']);
    }

    // 获取所有测试条目
    public function getGrievances()
    {
        $grievances = $this->database->getReference('grievances')->getValue();
        return response()->json($grievances);
    }
}
