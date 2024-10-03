<?php

namespace App\Http\Controllers\Department\auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartmentLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('department.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('department_key', 'department_password');

        $credentials = [
            'department_key' => $request->department_key,
            'department_password' => $request->department_password,
            'password' => $request->department_password,
        ];

        if (Auth::guard('department')->attempt($credentials)) {
            return redirect()->intended('/department/dashboard');
        }

        return back()->withErrors([
            'error_message' => 'Login Failed! Please check the department key and password.',
        ])->withInput($request->only('department_key'));
    }

    public function logout()
    {
        Auth::guard('department')->logout();
        return redirect()->route('department.login.form');
    }
}
