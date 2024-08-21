@extends('layouts.app')
@section('content')
<div class="container mx-auto p-4">
    <div class="overflow-x-auto flex justify-center py-6">
        <table class="w-5/6 bg-white border border-gray-200 rounded-lg">
            <thead>
                <tr class="bg-green-900 text-white border-none">
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