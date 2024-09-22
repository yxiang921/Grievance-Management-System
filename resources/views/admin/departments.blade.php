@extends('layouts.master')
@section('content')
    <div class="w-full h-auto mt-4 border border-gray-100 shadow-sm rounded-md p-4 bg-white">
        <div class="w-full flex flex-col lg:flex-row lg:items-center justify-between">
            <div class="">
                <input class="primary-input w-64" type="text" placeholder="Search department name">
                <button class="primary-btn w-28 ml-2">Search</button>
            </div>
            <div class="">
                <a 
                class="primary-btn"
                href="{{ route('admin.addNewDepartment') }}"
                >Add New Department</a>
            </div>
        </div>
        <div class="w-full h-auto mt-8 hidden lg:block">
            <div class="w-full text-center border-collapse border-y border-gray-100 bg-white">
                <table class="min-w-full overflow-hidden">
                    <thead class="border-b-[1px] border-gray-100 h-12 text-gray-500">
                        <tr>
                            <th class="">Department ID</th>
                            <th class="">Department Name</th>
                            <th class="">Staff Number</th>
                            <th class="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="h-10">
                            <td>DPM01</td>
                            <td>Assets Management and General Affairs Office</td>
                            <td>3</td>
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
                    <div class="text-gray-500 font-medium">Department ID</div>
                    <div>DPM01</div>
                </div>
                <div class="flex justify-between">
                    <div class="text-gray-500 font-medium">Department Name</div>
                    <div>
                        Assets Management and General Affairs Office
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="text-gray-500 font-medium">Staff Number</div>
                    <div>3</div>
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
