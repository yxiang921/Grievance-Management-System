<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthApiController extends Controller
{
    // To Do
    // Login
    // Register
    // Logout
    // Forgot Password

    // Profile img API: https://avatar.iran.liara.run/username?username=xxxxxxxx

    public function __construct()
    {

    }

    public function login()
    {
        $req = request();

        try {
            $validateData = $req->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);




        } catch (\Exception $th) {
            return response()->json([
                'message' => 'Error: ' . $th->getMessage(),
            ], 400);
        }
    }
}
