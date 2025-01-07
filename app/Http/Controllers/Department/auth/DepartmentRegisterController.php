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
            'department_name' => 'required | unique:departments,department_name',
            'department_category' => 'required',
            'department_key' => 'required | unique:departments,department_key',
            'department_password' => 'required | min:8',
            'password_confirmation' => 'required | same:department_password',
        ]);

        Department::create([
            'department_name' => $req->department_name,
            'department_category' => $req->department_category,
            'department_key' => $req->department_key,
            'department_password' => bcrypt($req->department_password),
        ]);

        $this->flashMessage('success', 'Department Registered Successfully!');

        return redirect()->route('department.login');
    }
}
