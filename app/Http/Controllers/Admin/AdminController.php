<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
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

    public function createAdmin()
    {
        $req = request();

        $validateData = $req->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required | min:8',
            'phone_number' => 'required',
        ]);

        $admin = Admin::create([
            'admin_name' => $validateData['name'],
            'admin_username' => $validateData['username'],
            'admin_email' => $validateData['email'],
            'admin_password' => bcrypt($validateData['password']),
            'admin_phone_number' => $validateData['phone_number'],
        ]);

        return redirect()->route('admin.admins');
    }

    public function editAdmin($admin_id)
    {
        $admin = Admin::find($admin_id);

        return view('admin.editAdmin', ['admin' => $admin]);

    }

    public function updateAdmin()
    {
        $req = request();
        $admin_id = $req->input('admin_id');
        $admin = Admin::find($admin_id);

        if ($req->input('password') == '') {
            $password = $admin->admin_password;
        } else {

            $validateData = $req->validate([
                'password' => 'required | min:8',
            ]);

            $password = bcrypt($validateData['password']);
        }

        $validateData = $req->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ]);

        $admin->admin_name = $validateData['name'];
        $admin->admin_username = $validateData['username'];
        $admin->admin_email = $validateData['email'];
        $admin->admin_phone_number = $validateData['phone_number'];
        $admin->admin_password = $password;

        $admin->save();

        return redirect()->route('admin.admins');
    }

    public function deleteAdmin($admin_id)
    {
        $admin = Admin::find($admin_id);

        $admin->delete();

        return redirect()->route('admin.admins');
    }
}
