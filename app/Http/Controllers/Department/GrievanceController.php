<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use Auth;
use DB;

class GrievanceController extends Controller
{
    public function __construct()
    {

    }

    public function getAllGrievances()
    {

        $department_id = Auth::guard('department')->user()->id;

        $grievances = DB::table('grievances')
            ->where('department_id', $department_id)
            ->join('users', 'grievances.user_id', '=', 'users.id')
            ->select('grievances.id as grievance_id', 'grievances.*', 'users.*', 'users.id as user_id')
            ->get();

        return view('department.grievances', ['grievances' => $grievances]);
    }

    public function getGrievance($grievance_id)
    {
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


        return view('department.grievanceDetail', [
            'grievance' => $grievance,
        ]);
    }

}
