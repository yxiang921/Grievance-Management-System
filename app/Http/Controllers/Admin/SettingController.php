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


        $admin->admin_name = $req->name;
        $admin->admin_username = $req->admin_username;
        $admin->admin_phone = $req->admin_phone;
        $admin->admin_email = $req->admin_email;

        if ($req->admin_password != '') {
            $admin->admin_password = bcrypt($req->admin_password);
        }

        $admin->save();

        $this->flashMessage('success', 'Admin Updated Successfully!');

        return redirect()->route('admin.settings');
    }
}
