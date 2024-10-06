<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use App\Models\Grievance;

class GrievanceController extends Controller
{
    public function __construct()
    {

    }

    public function getAllGrievances()
    {
        $grievances = DB::table('grievances')
            ->join('users', 'grievances.user_id', '=', 'users.id')
            ->select('grievances.id as grievance_id', 'grievances.*', 'users.*', 'users.id as user_id')
            ->get();

        return view('admin.grievances', ['grievances' => $grievances]);
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

        $departmentController = new DepartmentController();
        $departments = $departmentController->getAllDepartmentCategory();

        return view('admin.grievanceDetail', [
            'grievance' => $grievance,
            'departments' => $departments
        ]);
    }

    public function assignGrievance()
    {
        $req = request();

        $grievance = DB::table('grievances')
            ->where('id', $req->grievance_id)
            ->get();


    }
}
