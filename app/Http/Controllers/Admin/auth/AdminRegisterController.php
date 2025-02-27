<?php

namespace App\Http\Controllers\Admin\auth;

use App\Http\Controllers\Controller;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminRegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('admin.auth.register');
    }

    public function register()
    {
        $req = request();

        $validateData = $req->validate([
            'admin_name' => 'required', 
            'admin_username' => 'required',
            'admin_password' => 'required',
            'password_confirmation' => 'required|same:admin_password',
            'admin_email' => 'required',
            'admin_phone_number' => 'required',
        ]);

        Admin::create([
            'admin_name' => $validateData['admin_name'],
            'admin_username' => $validateData['admin_username'],
            'admin_password' => bcrypt($validateData['admin_password']),
            'admin_email' => $validateData['admin_email'],
            'admin_phone_number' => $validateData['admin_phone_number'],
        ]);

        $this->flashMessage('success', 'Registration Successful! Please login to continue.');

        return redirect()->route('admin.login');
    }
}
