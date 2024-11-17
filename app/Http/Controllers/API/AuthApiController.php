<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use DB;
use Hash;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class AuthApiController extends Controller
{
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

        return response()->json([
            'token' => $token,
            'user' => $user
        ], 200);

    }

    public function register()
    {
        $req = request();

        $req->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            "phone_number" => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8',
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
        ], 200);
    }

    public function showProfile()
    {

        $req = request();

        return response()->json($req->user());
    }

    public function edit(Request $req)
    {
        $validated = $req->validate([
            'userID' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $req->userID,
            'email' => 'required|string|email|max:255|unique:users,email,' . $req->userID,
            'phone_number' => 'required|string|max:255|unique:users,phone_number,' . $req->userID,
            'password' => 'required|string|min:8',
        ]);

        $user = DB::table('users')->where('id', $req->userID)->first();

        if (!$user) {
            return response()->json([
                'message' => 'User not found',
            ], 404);
        }

        $updatedData = [
            'name' => $req->name,
            'username' => $req->username,
            'email' => $req->email,
            'phone_number' => $req->phone_number,
            'password' => Hash::make($req->password),
        ];

        DB::table('users')->where('id', $req->userID)->update($updatedData);

        return response()->json([
            'message' => 'User updated successfully',
            'user' => $updatedData
        ], 200);
    }
}
