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
        $department_id = $req->input('departmentId');

        $department = Department::find($department_id);


        if ($req->input('departmentPassword') == '') {
            $password = $department->department_password;
        } else {

            $validateData = $req->validate([
                'password' => 'required | min:8',
            ]);

            $password = bcrypt($validateData['departmentPassword']);
        }

        $validateData = $req->validate([
            'departmentName' => 'required',
            'departmentCategory' => 'required',
            'departmentId' => 'required',
            'departmentKey' => 'required',

        ]);


        $department->department_name = $validateData['departmentName'];
        $department->department_category = $validateData['departmentCategory'];
        $department->department_key = $validateData['departmentKey'];
        $department->department_password = $password;

        $department->save();

        return redirect()->route('admin.departments');
    }

    public function deleteDepartment($department_id)
    {
        $department = Department::find($department_id);

        $department->delete();

        return redirect()->route('admin.departments');
    }

    public function getAllDepartmentCategory()
    {
        $departments = DB::table('departments')
            ->select('department_name', 'department_category')
            ->get();

        return $departments;
    }
}
