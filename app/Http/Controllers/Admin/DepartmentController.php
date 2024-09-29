<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DepartmentController extends Controller
{
    // To Do
    // C: Create department 201
    // R: Read department 200
    // U: Update department 200
    // D: Delete department 200

    public function __construct()
    {

    }

    public function getAllDepartment()
    {
        $departments = DB::table('departments')->get();

        return view('admin.departments', ['departments' => $departments]);
    }
}
