@extends('layouts.master')
@section('content')
    <div class="w-full border border-gray-100 rounded-md p-4">
        <h1 class="text-lg font-medium">Add Department</h1>
        <form method="POST" action="{{ route('admin.department.create') }}" class="mt-4">
            @csrf
            <div class="grid lg:grid-cols-4 items-center mt-4">
                <label for="departmentName" class="col-span-1">Department Name</label>
                <input type="text" class="primary-input col-span-2 mt-2 lg:mt-0" placeholder="Name"
                    name="departmentName" />
            </div>

            <div class="grid lg:grid-cols-4 items-center mt-4">
                <label for="departmentKey" class="col-span-1">Department Key</label>
                <input type="text" class="primary-input col-span-2 mt-2 lg:mt-0" placeholder="Department Key"
                    name="departmentKey" />
            </div>

            <div class="grid lg:grid-cols-4 items-center mt-4">
                <label for="departmentPassword" class="col-span-1">Department Password</label>
                <input type="password" class="primary-input col-span-2 mt-2 lg:mt-0" name="departmentPassword"
                    min="8" />
            </div>

            <div class="grid lg:grid-cols-4 items-center mt-4">
                <label for="departmentCategory" class="col-span-1">Category</label>
                <select name="departmentCategory" id=""
                    class="primary-select w-full rounded-md border border-gray-400 text-gray-400">
                    <option value="Academic">Academic</option>
                    <option value="Facility">Facility</option>
                    <option value="Finance">Finance</option>
                    <option value="Behaviour">Behaviour</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            
            <x-error-message />

            <div class="mt-8">
                <a class="cancel-btn" href="{{ route('admin.departments') }}">Cancel</a>
                <button class="primary-btn" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection
