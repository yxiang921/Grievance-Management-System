<?php

namespace App\Http\Controllers\Department\auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartmentLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('department.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('code', 'key'); // Department 使用 code 和 key 登录

        if (Auth::guard('department')->attempt($credentials)) {
            return redirect()->intended('/department/dashboard');
        }

        return back()->withErrors([
            'code' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::guard('department')->logout();
        return redirect('/department/login');
    }
}
