@extends('layouts.master')
@section('content')
    <div class="w-full h-auto mt-4 border border-gray-100 shadow-sm rounded-md p-4 bg-white">
        <div class="w-full flex flex-row justify-between items-center pr-2">
            <h1 class="font-semibold text-lg">Admin List</h1>
            <button class="primary-btn">Add new admin</button>
            {{-- <x-modal></x-modal> --}}
        </div>
        <div class="w-full">
            <div class="w-full">
                <div class="w-full grid grid-cols-1 lg:grid-cols-3 gap-4">
                    <input type="text" class="primary-input" placeholder="Admin ID">
                    <input type="text" class="primary-input" placeholder="Phone Number">
                    <input type="text" class="primary-input" placeholder="Email Address">
                </div>
            </div>

            <div class="line w-full h-1 border-b-[1px] border-gray-100 my-4"></div>

            <input class="primary-input w-64" type="text" placeholder="Username">
            <input class="primary-input w-64 lg:mx-4" type="text" placeholder="Full Name">
            <button class="primary-btn w-28">Search</button>
        </div>
        <div class="w-full h-auto mt-8 hidden lg:block">
            <div class="w-full text-center border-collapse border-y border-gray-100 bg-white">
                <table class="min-w-full overflow-hidden">
                    <thead class="border-b-[1px] border-gray-100 h-12 text-gray-500">
                        <tr>
                            <th class="">Admin ID</th>
                            <th class="">Username</th>
                            <th class="">Full Name</th>
                            <th class="">Email</th>
                            <th class="">Phone Number</th>
                            <th class="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="h-10">
                            <td>ADM01</td>
                            <td>johndoe123</td>
                            <td>John Doe</td>
                            <td>johndoe@gmail.com</td>
                            <td>012 345 6789</td>
                            <td>
                                <a href="" class="underline">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="lg:hidden block mt-4">
            <div class="bg-white border border-gray-100 rounded-md shadow-sm mb-4 p-4">
                <div class="flex justify-between">
                    <div class="text-gray-500 font-medium">Admin ID</div>
                    <div>ADM01</div>
                </div>
                <div class="flex justify-between">
                    <div class="text-gray-500 font-medium">Username</div>
                    <div>johndoe123</div>
                </div>
                <div class="flex justify-between">
                    <div class="text-gray-500 font-medium">Full Name</div>
                    <div>John Doe</div>
                </div>
                <div class="flex justify-between">
                    <div class="text-gray-500 font-medium">Email</div>
                    <div>johndoe@gmail.com</div>
                </div>
                <div class="flex justify-between">
                    <div class="text-gray-500 font-medium">Phone Number</div>
                    <div>0123456789</div>
                </div>
                <div class="flex justify-between">
                    <div class="text-gray-500 font-medium">Action</div>
                    <div>
                        <a href="" class="underline">Edit</a>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
