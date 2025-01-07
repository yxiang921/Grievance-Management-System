<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Auth;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {

        $admin_id = Auth::guard('admin')->user()->id;
        $admin = Admin::find($admin_id);

        return view('admin.settings', [
            'admin' => $admin,
        ]);
    }

    public function update()
    {
        $req = request();

        $admin_id = Auth::guard('admin')->user()->id;

        $admin = Admin::find($admin_id);


        $admin->admin_name = $req->last_name;
        $admin->admin_username = $req->username;
        $admin->admin_phone_number = $req->phone_number;
        $admin->admin_email = $req->email;

        if ($req->admin_password != '') {
            $admin->admin_password = bcrypt($req->admin_password);
        }

        $admin->save();

        $this->flashMessage('success', 'Admin Updated Successfully!');

        return redirect()->route('admin.settings');
    }
}
