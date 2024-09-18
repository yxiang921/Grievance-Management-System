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
                        <th class="py-2 px-4 border-b">Department ID</th>
                        <th class="py-2 px-4 border-b">Department Name</th>
                        <th class="py-2 px-4 border-b">Number of Staff</th>
                        <th class="py-2 px-4 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-gray-700">
                        <td class="py-2 px-4 border-b">DPM01</td>
                        <td class="py-2 px-4 border-b">Assets Management and General Affairs Office</td>
                        <td class="py-2 px-4 border-b text-center">9</td>
                        <td class="py-2 px-4 border-b text-green-900 hover:underline cursor-pointer">Manage</td>
                    </tr>
                    <tr class="text-gray-700">
                        <td class="py-2 px-4 border-b">DPM02</td>
                        <td class="py-2 px-4 border-b">Account and Finance Office</td>
                        <td class="py-2 px-4 border-b text-center">12</td>
                        <td class="py-2 px-4 border-b text-green-900 hover:underline cursor-pointer">Manage</td>
                    </tr>
                    <tr class="text-gray-700">
                        <td class="py-2 px-4 border-b">DPM03</td>
                        <td class="py-2 px-4 border-b">Academic Affairs, Admission Registration Office</td>
                        <td class="py-2 px-4 border-b text-center">5</td>
                        <td class="py-2 px-4 border-b text-green-900 hover:underline cursor-pointer">Manage</td>
                    </tr>
                    <tr class="text-gray-700">
                        <td class="py-2 px-4 border-b">DPM04</td>
                        <td class="py-2 px-4 border-b">Student Affair Office</td>
                        <td class="py-2 px-4 border-b text-center">8</td>
                        <td class="py-2 px-4 border-b text-green-900 hover:underline cursor-pointer">Manage</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
