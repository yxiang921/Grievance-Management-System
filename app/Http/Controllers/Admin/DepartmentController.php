<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use DB;

class DepartmentController extends Controller
{
    public function __construct()
    {

    }

    public function getAllDepartment()
    {
        $departments = DB::table('departments')->get();

        return view('admin.departments', ['departments' => $departments]);
    }

    public function createDepartment()
    {
        $req = request();

        $validateData = $req->validate([
            'departmentName' => 'required',
            'departmentCategory' => 'required',
        ]);

        $department = Department::create([
            'department_name' => $validateData['departmentName'],
            'department_category' => $validateData['departmentCategory'],
        ]);

        return redirect()->route('admin.departments');
    }

    public function editDepartment($department_id)
    {
        $department = Department::find($department_id);

        return view('admin.editDepartment', ['department' => $department]);

    }

    public function updateDepartment()
    {
        $req = request();

        $validateData = $req->validate([
            'departmentName' => 'required',
            'departmentCategory' => 'required',
            'departmentId' => 'required',
        ]);

        $department = Department::find($validateData['departmentId']);

        $department->department_name = $validateData['departmentName'];
        $department->department_category = $validateData['departmentCategory'];

        $department->save();

        return redirect()->route('admin.departments');
    }

    public function deleteDepartment($department_id)
    {
        $department = Department::find($department_id);

        $department->delete();

        return redirect()->route('admin.departments');
    }
}
