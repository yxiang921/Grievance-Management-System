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
            ->select('grievances.id as grievance_id', 'grievances.*', 'users.*', 'users.id as user_id')
            ->get();

        return view('admin.grievances', ['grievances' => $grievances]);
    }

    public function getGrievance($grievance_id)
    {
        // SELECT * FROM grievances
        // JOIN users
        // ON grievances.user_id = users.id
        // WHERE grievances.id = $grievance_id;

        $grievance = DB::table('grievances')
            ->join('users', 'grievances.user_id', '=', 'users.id')
            ->select(
                'grievances.id as grievance_id',
                'grievances.*',
                'users.id as user_id',
                'users.*',
                'grievances.created_at as grievance_created_at'
            )
            ->where('grievances.id', '=', $grievance_id)
            ->get();

        return view('admin.grievanceDetail')->with('grievance', $grievance);
    }
}
