@extends('layouts.master')
@section('content')
    <div class="w-full border border-gray-100 rounded-md p-4">
        <h1 class="text-lg font-medium">Add Admin</h1>
        <form class="mt-4" action="{{ route('admin.admin.create') }}" method="POST">
            @csrf
            <div class="grid lg:grid-cols-4 items-center mt-4">
                <label for="name" class="col-span-1">Name</label>
                <input type="text" class="primary-input col-span-2 mt-2 lg:mt-0" placeholder="Full Name" name="name" />
            </div>
            <div class="grid lg:grid-cols-4 items-center mt-4">
                <label for="username" class="col-span-1">Username</label>
                <input type="text" class="primary-input col-span-2 mt-2 lg:mt-0" placeholder="Username"
                    name="username" />
            </div>
            <div class="grid lg:grid-cols-4 items-center mt-4">
                <label for="email" class="col-span-1">Email Address</label>
                <input type="text" class="primary-input col-span-2 mt-2 lg:mt-0" placeholder="Email Address"
                    name="email" />
            </div>
            <div class="grid lg:grid-cols-4 items-center mt-4">
                <label for="phone_number" class="col-span-1">Phone Number</label>
                <input type="text" class="primary-input col-span-2 mt-2 lg:mt-0" placeholder="Phone Number"
                    name="phone_number" />
            </div>
            <div class="grid lg:grid-cols-4 items-center mt-4">
                <label for="password" class="col-span-1">Password</label>
                <input type="password" class="primary-input col-span-2 mt-2 lg:mt-0" placeholder="Password"
                    name="password" />
            </div>

            <x-error-message />

            <div class="mt-8">
                <a class="cancel-btn" href="{{ route('admin.admins') }}">Cancel</a>
                <button class="primary-btn" type="submit">Submit</button>
            </div>

        </form>
    </div>
@endsection
