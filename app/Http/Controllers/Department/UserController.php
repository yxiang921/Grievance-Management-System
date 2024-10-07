<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use DB;

class UserController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        $users = DB::table('users')->get();

        return view('department.users', ['users' => $users]);
    }

    public function createUser()
    {
        $req = request();

        $validateData = $req->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required | min:8',
            'phone_number' => 'required',
        ]);

        $user = User::create([
            'name' => $validateData['name'],
            'username' => $validateData['username'],
            'email' => $validateData['email'],
            'password' => bcrypt($validateData['password']),
            'phone_number' => $validateData['phone_number'],
        ]);

        return redirect()->route('department.users');
    }

    public function editUser($user_id)
    {
        $user = User::find($user_id);

        return view('department.editUser', ['user' => $user]);

    }

    public function updateUser()
    {
        $req = request();
        $user_id = $req->input('user_id');
        $user = User::find($user_id);

        if ($req->input('password') == '') {
            $password = $user->password;
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

        $user->name = $validateData['name'];
        $user->username = $validateData['username'];
        $user->email = $validateData['email'];
        $user->phone_number = $validateData['phone_number'];
        $user->password = $password;

        $user->save();

        return redirect()->route('department.users');
    }

    public function deleteUser($user_id)
    {
        $user = User::find($user_id);

        $user->delete();

        return redirect()->route('department.users');
    }
}
