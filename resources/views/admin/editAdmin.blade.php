@extends('layouts.master')
@section('content')
    <div class="w-full border border-gray-100 rounded-md p-4">
        <h1 class="text-lg font-medium">Edit Admin</h1>
        <form class="mt-4" action="">
            <div class="grid lg:grid-cols-4 items-center mt-4">
                <label for="adminID" class="col-span-1">Admin ID</label>
                <input type="text" class="primary-input col-span-2 mt-2 lg:mt-0" name="adminID" readonly value="ADM01"/>
            </div>
            <div class="grid lg:grid-cols-4 items-center mt-4">
                <label for="fullname" class="col-span-1">Full Name</label>
                <input type="text" class="primary-input col-span-2 mt-2 lg:mt-0" placeholder="Full Name" name="fullname" />
            </div>
            <div class="grid lg:grid-cols-4 items-center mt-4">
                <label for="username" class="col-span-1">Username</label>
                <input type="text" class="primary-input col-span-2 mt-2 lg:mt-0" placeholder="Username" name="username" />
            </div>
            <div class="grid lg:grid-cols-4 items-center mt-4">
                <label for="email" class="col-span-1">Email Address</label>
                <input type="text" class="primary-input col-span-2 mt-2 lg:mt-0" placeholder="Email Address" name="email" />
            </div>
            <div class="grid lg:grid-cols-4 items-center mt-4">
                <label for="phoneNumber" class="col-span-1">Phone Number</label>
                <input type="text" class="primary-input col-span-2 mt-2 lg:mt-0" placeholder="Phone Number" name="phoneNumber" />
            </div>
            <div class="grid lg:grid-cols-4 items-center mt-4">
                <label for="password" class="col-span-1">Password</label>
                <input type="password" class="primary-input col-span-2 mt-2 lg:mt-0" placeholder="Password" name="password" />
            </div>

            <div class="mt-8">
                <button class="cancel-btn">Cancel</button>
                <button class="primary-btn" type="submit">Submit</button>
            </div>

        </form>
    </div>


    <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
        });
    </script>
@endsection
