<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class UserController extends Controller
{
    // To Do
    // C: Create user 201
    // R: Read user 200
    // U: Update user 200
    // D: Delete user 200

    public function __construct()
    {

    }

    public function index()
    {
        $users = DB::table('users')->get();

        return view('admin.users', ['users' => $users]);
    }
}
