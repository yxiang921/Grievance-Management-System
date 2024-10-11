<?php

namespace App\Http\Controllers\Department\auth;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentRegisterController extends Controller
{

    public function __construct()
    {

    }

    public function showRegisterForm()
    {
        return view('department.auth.register');
    }

    public function register()
    {

        $req = request();

        $validateData = $req->validate([
            'department_name' => 'required',
            'department_category' => 'required',
            'department_key' => 'required | unique:departments',
            'department_password' => 'required',
        ]);

        Department::create([
            'department_name' => $req->department_name,
            'department_category' => $req->department_category,
            'department_key' => $req->department_key,
            'department_password' => bcrypt($req->department_password),
        ]);

        return redirect()->route('department.login')
            ->with('success', 'Your account has been registered successfully');
    }
}
