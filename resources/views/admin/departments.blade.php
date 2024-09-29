@extends('layouts.master')
@section('content')
    <div class="w-full h-auto mt-4 border border-gray-100 shadow-sm rounded-md p-4 bg-white">
        <div class="w-full flex flex-col lg:flex-row lg:items-center justify-between">
            <div class="">
                <input class="primary-input w-64" type="text" placeholder="Search department name">
                <button class="primary-btn w-28 ml-2">Search</button>
            </div>
            <div class="">
                <a class="primary-btn" href="{{ route('admin.addDepartment') }}">Add New Department</a>
            </div>
        </div>
        <div class="w-full h-auto mt-8 hidden lg:block">
            <div class="w-full text-center border-collapse border-y border-gray-100 bg-white">
                <table class="min-w-full overflow-hidden">
                    <thead class="border-b-[1px] border-gray-100 h-12 text-gray-500">
                        <tr>
                            <th class="">Department ID</th>
                            <th class="">Department Name</th>
                            <th class="">Category</th>
                            <th class="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departments as $department)
                            <tr class="h-10">
                                <td>
                                    DPM{{ $department->id }}
                                </td>
                                <td>
                                    {{ $department->department_name }}
                                </td>
                                <td>
                                    {{ $department->department_category }}
                                </td>
                                <td>
                                    <a href="" class="underline">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        @foreach ($departments as $department)
            <div class="lg:hidden block mt-4">
                <div class="bg-white border border-gray-100 rounded-md shadow-sm mb-4 p-4">
                    <div class="flex justify-between">
                        <div class="text-gray-500 font-medium">Department ID</div>
                        <div>
                            DPM{{ $department->id }}
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <div class="text-gray-500 font-medium">Department Name</div>
                        <div>
                            {{ $department->department_name }}
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <div class="text-gray-500 font-medium">Category</div>
                        <div>
                            {{ $department->department_category }}
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <div class="text-gray-500 font-medium">Action</div>
                        <div>
                            <a href="" class="underline">Edit</a>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach

    </div>
@endsection
