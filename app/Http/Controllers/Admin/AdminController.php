<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class AdminController extends Controller
{
    // To Do
    // C: Create admin 201
    // R: Read admin 200
    // U: Update admin 200
    // D: Delete admin 200

    public function __construct()
    {

    }

    public function index()
    {
        $admins = DB::table('admins')->get();

        return view('admin.admins', [
            'admins' => $admins
        ]);
    }
}
