<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use App\Models\Grievance;

class GrievanceController extends Controller
{
    // To Do
    // C: Create? Admin应不应该可以create 投诉？

    // R: Read grievance 200

    // U: Update/Assign grievance to department
    //    Modify grievance status, category or add remarks

    // D: Delete grievance 200

    public function __construct()
    {

    }

    public function getAllGrievances()
    {
        // SELECT * FROM grievances
        // JOIN users
        // ON grievances.user_id = users.id;
        $grievances = DB::table('grievances')
            ->join('users', 'grievances.user_id', '=', 'users.id')
            ->get();

        return view('admin.grievances', ['grievances' => $grievances]);
    }
}
