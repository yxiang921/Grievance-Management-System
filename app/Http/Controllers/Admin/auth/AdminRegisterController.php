<?php

namespace App\Http\Controllers\Admin\auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminRegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('admin.auth.register');
    }

    public function register(Request $request)
    {
        dd('register');


        
        return back()->withErrors([
            'error_message' => 'Login Failed! Please check your email and password.',
        ])->withInput($request->only(keys: 'admin_email'));
    }
}
