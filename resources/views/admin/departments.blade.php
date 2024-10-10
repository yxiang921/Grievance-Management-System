@extends('layouts.master')
@section('content')
    <div class="w-full h-auto mt-4 border border-gray-100 shadow-sm rounded-md p-4 bg-white">
        <div class="w-full flex flex-col lg:flex-row lg:items-center justify-between">
            <form action="{{ route('admin.department.search') }}" method="POST">
                @csrf
                <input class="primary-input w-64" type="text" placeholder="Search department name" name="keyword"
                    value="{{ request('keyword') }}">
                <button class="primary-btn w-28 ml-2">Search</button>
            </form>
            <div class="">
                <a class="primary-btn" href="{{ route('admin.department.add') }}">Add New Department</a>
            </div>
        </div>
        <div class="w-full h-auto mt-8 hidden lg:block">
            <div class="w-full text-center border-collapse border-y border-gray-100 bg-white">
                <table class="min-w-full overflow-hidden">
                    <thead class="border-b-[1px] border-gray-100 h-12 text-gray-500">
                        <tr>
                            <th class="">Department ID</th>
                            <th class="">Department Key</th>
                            <th class="">Department Name</th>
                            <th class="">Category</th>
                            <th class="">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if (count($departments) == 0)
                            <tr>
                                <td colspan="5" class="text-center py-4">No departments found</td>
                            </tr>
                        @endif

                        @foreach ($departments as $department)
                            <tr class="h-10">
                                <td>
                                    DPM{{ $department->id }}
                                </td>
                                <td>
                                    {{ $department->department_key }}
                                </td>
                                <td>
                                    {{ $department->department_name }}
                                </td>
                                <td>
                                    {{ $department->department_category }}
                                </td>
                                <td>
                                    <a href="{{ route('admin.department.edit', ['department_id' => $department->id]) }}"
                                        class="underline">Edit</a>
                                    <span class="p-2">|</span>
                                    <a href="{{ route('admin.department.delete', ['department_id' => $department->id]) }}"
                                        class="underline">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        @if (count($departments) == 0)
            <div class="lg:hidden block mt-4">
                <div class="bg-white border border-gray-100 rounded-md shadow-sm mb-4 p-4">
                    <div class="text-center py-4">No departments found</div>
                </div>
            </div>
        @endif

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
                        <div class="text-gray-500 font-medium">Department Key</div>
                        <div>
                            {{ $department->department_key }}
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
                            <a href="{{ route('admin.department.edit', ['department_id' => $department->id]) }}" class="underline">Edit</a>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach

    </div>
@endsection
