@extends('layouts.master')
@section('content')
    <div class="w-full border border-gray-100 rounded-md p-4">
        <h1 class="text-lg font-medium">Edit Department</h1>
        <form class="mt-4" action="{{ route('admin.department.update') }}" method="POST">
            @csrf

            <input type="hidden" name="departmentId" value="{{ $department->id }}" />

            <div class="grid lg:grid-cols-4 items-center mt-4">
                <label for="departmentName" class="col-span-1">Department Name</label>
                <input type="text" class="primary-input col-span-2 mt-2 lg:mt-0" placeholder="Name" name="departmentName"
                    value="{{ $department->department_name }}" />
            </div>

            <div class="grid lg:grid-cols-4 items-center mt-4">
                <label for="departmentKey" class="col-span-1">Department Key</label>
                <input type="text" class="primary-input col-span-2 mt-2 lg:mt-0" placeholder="Name" name="departmentKey"
                    value="{{ $department->department_key }}" />
            </div>

            <div class="grid lg:grid-cols-4 items-center mt-4">
                <label for="departmentPassword" class="col-span-1">Department Password</label>
                <input type="password" class="primary-input col-span-2 mt-2 lg:mt-0" name="departmentPassword"
                    value="" />
            </div>


            <div class="grid lg:grid-cols-4 items-center mt-4">
                <label for="departmentCategory" class="col-span-1">Categry</label>
                <select name="departmentCategory" id=""
                    class="primary-select w-full rounded-md border border-gray-400 text-gray-400">
                    <option value="Academic" {{ $department->department_category == 'Academic' ? 'selected' : '' }}>Academic
                    </option>
                    <option value="Facility" {{ $department->department_category == 'Facility' ? 'selected' : '' }}>Facility
                    </option>
                    <option value="Finance" {{ $department->department_category == 'Finance' ? 'selected' : '' }}>Finance
                    </option>
                    <option value="Behaviour" {{ $department->department_category == 'Behaviour' ? 'selected' : '' }}>
                        Behaviour</option>
                    <option value="Others" {{ $department->department_category == 'Others' ? 'selected' : '' }}>Others
                    </option>
                </select>
            </div>

            <x-error-message />

            <div class="mt-8">
                <a class="cancel-btn" href="{{ route('admin.departments') }}">Cancel</a>
                <button class="primary-btn" type="submit">Update</button>
            </div>

        </form>
    </div>
@endsection
