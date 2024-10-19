<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class AuthApiController extends Controller
{

    // Profile img API: https://avatar.iran.liara.run/username?username=xxxxxxxx

    public function __construct()
    {

    }

    public function login()
    {
        $req = request();

        $req->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (!auth()->attempt($req->only('email', 'password'))) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $user = auth()->user();
        $token = $user->createToken('flutter_auth_token')->accessToken;

        return response()->json(['token' => $token], 200);

    }

    public function register()
    {
        $req = request();

        $req->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            "phone_number" => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if (User::where('username', $req->username)->exists()) {
            return response()->json(['message' => 'Username already exists'], 400);
        }

        $user = User::create([
            'name' => $req->name,
            'username' => $req->username,
            'email' => $req->email,
            'phone_number' => $req->phone_number,
            'password' => Hash::make($req->password),
        ]);

        return response()->json([
            'message' => 'User created successfully',
            'user' => $user
        ], 201);
    }

    public function showProfile()
    {

        $req = request();

        return response()->json($req->user());
    }
}
