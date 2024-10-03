<?php

namespace App\Http\Controllers\Admin\auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'admin_email' => 'required|email',
            'admin_password' => 'required',
        ]);

        $credentials = $request->only('admin_email', 'admin_password');

        $credentials['password'] = $credentials['admin_password'];

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.home');
        }

        return back()->withErrors([
            'error_message' => 'Login Failed! Please check your email and password.',
        ])->withInput($request->only(keys: 'admin_email'));
    }



    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/auth/login');
    }
}
