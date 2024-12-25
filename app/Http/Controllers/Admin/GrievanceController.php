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
            ->orderBy('grievances.status', 'desc')
            ->get();

        return view('admin.grievances', ['grievances' => $grievances]);
    }

    public function getGrievance($grievance_id)
    {
        $grievance = DB::table('grievances')
            ->join('users', 'grievances.user_id', '=', 'users.id')
            ->leftJoin('departments', 'grievances.department_id', '=', 'departments.id')
            ->select(
                'grievances.id as grievance_id',
                'grievances.*',
                'users.id as user_id',
                'users.*',
                'grievances.created_at as grievance_created_at',
                'departments.department_name'
            )
            ->where('grievances.id', '=', $grievance_id)
            ->get();

        $departmentController = new DepartmentController();
        $departments = $departmentController->getAllDepartmentCategory();

        return view('admin.grievanceDetail', [
            'grievanceDetail' => $grievance,
            'departments' => $departments
        ]);
    }

    public function assignGrievance()
    {
        $req = request();

        $validateData = $req->validate([
            'grievanceID' => 'required',
            'category' => 'required',
            'departmentID' => 'required',
            'priority' => 'required',
            'duedate' => 'required',
            'outsourceRemark' => 'nullable | max:255',
        ]);

        $grievance_id = $validateData['grievanceID'];

        $grievance = Grievance::find($grievance_id);

        $grievance->department_id = $validateData['departmentID'];
        $grievance->status = 'Received';
        $grievance->priority = $validateData['priority'];
        $grievance->due_date = $validateData['duedate'];
        $grievance->category = $validateData['category'];
        $grievance->outsource_remark = $validateData['outsourceRemark'];
        $grievance->assigned_at = now();
        $grievance->is_assigned = true;

        $grievance->save();

        $assigned_grievance = DB::table('grievances')
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

        $this->flashMessage('success', 'Grievance Assigned Successfully!');

        return redirect()->route('admin.grievances');

    }

    public function closeGrievance($grievance_id)
    {
        $grievance = Grievance::find($grievance_id);

        $grievance->status = 'Closed';
        $grievance->closed_at = now();
        $grievance->updated_at = now();
        $grievance->save();

        $this->flashMessage('success', 'Grievance Closed Successfully!');

        return redirect()->route('admin.grievances');
    }


    public function searchGrievance()
    {

        $req = request();
        $keyword = $req->input('keyword');
        $datetime = $req->input('datetime');
        $status = $req->input('status');

        $query = DB::table('grievances')
            ->join('users', 'grievances.user_id', '=', 'users.id')
            ->select('grievances.id as grievance_id', 'grievances.*', 'users.*', 'users.id as user_id');

        if ($keyword != null && $keyword != '') {
            $query->where(function ($q) use ($keyword) {
                $q->where('title', 'LIKE', '%' . $keyword . '%')
                    ->orWhere('description', 'LIKE', '%' . $keyword . '%');
            });
        }

        $startDate = substr($datetime, 0, 16);
        $endDate = substr($datetime, 20, 16);
        $startDate = date('Y-m-d H:i:s', strtotime($startDate));
        $endDate = date('Y-m-d H:i:s', strtotime($endDate));

        if ($datetime != null && $datetime != '') {
            $query->whereBetween('grievances.created_at', [$startDate, $endDate]);
        }

        if ($status != null && $status != '') {
            $query->where('grievances.status', '=', $status);
        }

        $grievances = $query->orderBy('grievances.status', 'desc')->get();

        $this->flashMessage('success', 'Search Results as Below');

        return view('admin.grievances', [
            'grievances' => $grievances,
        ]);

    }
}
