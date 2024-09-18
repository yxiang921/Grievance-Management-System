@extends('layouts.master')
@section('content')
    {{-- Search area --}}
    <div class="w-full pl-6 flex flex-col justify-center items-start">
        <input type="text" placeholder="Search by keywords"
            class="w-3/12 h-10 rounded-md outline-none transition-all pl-4 focus:border-green-900 focus:outline-none border">
        <button class="bg-green-900 text-white h-10 w-2/12 rounded-md mt-4">Search</button>
    </div>

    <div class="w-[95%] mx-auto my-4 p-6 bg-white">
        <div class="w-full h-auto flex justify-center">
            <table class="w-full bg-white border border-gray-200 rounded-lg text-center">
                <thead>
                    <tr class="bg-green-900 text-white">
                        <th class="py-2 px-4 border-b">Admin ID</th>
                        <th class="py-2 px-4 border-b">UserName</th>
                        <th class="py-2 px-4 border-b">Full Name</th>
                        <th class="py-2 px-4 border-b">Email Address</th>
                        <th class="py-2 px-4 border-b">Phone Number</th>
                        <th class="py-2 px-4 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-gray-700">
                        <td class="py-2 px-4 border-b">ADM01</td>
                        <td class="py-2 px-4 border-b">alex123</td>
                        <td class="py-2 px-4 border-b text-center">Alex Tan</td>
                        <td class="py-2 px-4 border-b text-center">alextan@gmail.com</td>
                        <td class="py-2 px-4 border-b text-center">012-3456789</td>
                        <td class="py-2 px-4 border-b text-green-900 hover:underline cursor-pointer">Edit</td>
                    </tr>
                    <tr class="text-gray-700">
                        <td class="py-2 px-4 border-b">ADM02</td>
                        <td class="py-2 px-4 border-b">john123</td>
                        <td class="py-2 px-4 border-b text-center">John Doe</td>
                        <td class="py-2 px-4 border-b text-center">johndoe@gmail.com</td>
                        <td class="py-2 px-4 border-b text-center">012-3456789</td>
                        <td class="py-2 px-4 border-b text-green-900 hover:underline cursor-pointer">Edit</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
