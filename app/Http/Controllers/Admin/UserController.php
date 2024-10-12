<?php

namespace App\Http\Controllers\Admin;

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

        return view('admin.users', ['users' => $users]);
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

        $this->flashMessage('success', 'User Created Successfully!');

        return redirect()->route('admin.users');
    }

    public function editUser($user_id)
    {
        $user = User::find($user_id);

        return view('admin.editUser', ['user' => $user]);

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

        $this->flashMessage('success', 'User Updated Successfully!');

        return redirect()->route('admin.users');
    }

    public function deleteUser($user_id)
    {
        $user = User::find($user_id);

        $user->delete();

        $this->flashMessage('success', 'User Deleted Successfully!');

        return redirect()->route('admin.users');
    }

    public function searchUser(){
        $req = request();
        $user_id = $req->input('user_id');
        $phone_number = $req->input('phone_number');
        $email = $req->input('email');
        $username = $req->input('username');
        $fullname = $req->input('fullname');

        $query = DB::table('users');

        if($user_id != '' && $user_id != null){
            $query->where('id', '=', $user_id);
        }

        if($phone_number != '' && $phone_number != null){
            $query->where('phone_number', 'LIKE', '%'.$phone_number.'%');
        }

        if($email != '' && $email != null){
            $query->where('email', 'LIKE', '%'.$email.'%');
        }

        if($username != '' && $username != null){
            $query->where('username', 'LIKE', '%'.$username.'%');
        }

        if($fullname != '' && $fullname != null){
            $query->where('name', 'LIKE', '%'.$fullname.'%');
        }

        $users = $query->get();

        $this->flashMessage('success', 'Search Results as Below');

        return view('admin.users', [
            'users' => $users,
        ]);

    }
}
