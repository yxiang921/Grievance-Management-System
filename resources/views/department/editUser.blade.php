@extends('layouts.master')
@section('content')
    <div class="w-full border border-gray-100 rounded-md p-4">
        <h1 class="text-lg font-medium">Edit User</h1>
        <form class="mt-4" action="{{ route('department.user.update') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ $user->id }}" />
            <div class="grid lg:grid-cols-4 items-center mt-4 text-gray-400">
                <label for="userID" class="col-span-1">User ID</label>
                <input type="text" class="primary-input col-span-2 mt-2 lg:mt-0" name="user_id" readonly
                    value="{{ $user->id }}" />
            </div>
            <div class="grid lg:grid-cols-4 items-center mt-4">
                <label for="name" class="col-span-1">Name</label>
                <input type="text" class="primary-input col-span-2 mt-2 lg:mt-0" placeholder="Name" name="name" value="{{ $user->name}}"/>
            </div>
            <div class="grid lg:grid-cols-4 items-center mt-4">
                <label for="username" class="col-span-1">Username</label>
                <input type="text" class="primary-input col-span-2 mt-2 lg:mt-0" placeholder="Username" name="username"
                    value="{{ $user->username }}" />
            </div>
            <div class="grid lg:grid-cols-4 items-center mt-4">
                <label for="email" class="col-span-1">Email Address</label>
                <input type="text" class="primary-input col-span-2 mt-2 lg:mt-0" placeholder="Email Address"
                    name="email" value="{{ $user->email }}" />
            </div>
            <div class="grid lg:grid-cols-4 items-center mt-4">
                <label for="phoneNumber" class="col-span-1">Phone Number</label>
                <input type="text" class="primary-input col-span-2 mt-2 lg:mt-0" placeholder="Phone Number"
                    name="phone_number" value="{{ $user->phone_number }}" />
            </div>
            <div class="grid lg:grid-cols-4 items-center mt-4">
                <label for="password" class="col-span-1">Password</label>
                <input type="password" class="primary-input col-span-2 mt-2 lg:mt-0" placeholder="Password"
                    name="password" />
            </div>

            <div class="mt-8">
                <a href="{{ route('department.users') }}" class="cancel-btn">Cancel</a>
                <button class="primary-btn" type="submit">Update</button>
            </div>

        </form>
    </div>
@endsection
