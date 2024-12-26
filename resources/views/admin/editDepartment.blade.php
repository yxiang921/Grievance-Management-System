@extends('layouts.master')
@section('content')
    <div class="w-full border border-gray-100 rounded-md p-4">
        <div class="w-full flex flex-row items-center justify-between">
            <h1 class="text-lg font-medium">Edit Department</h1>
            <button class="primary-btn" id="openModalBtn">Add Staff</button>
        </div>
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
                <label for="departmentCategory" class="col-span-1">Category</label>
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

        <div class="items-center mt-12">
            <h1 class="text-lg font-medium pl-4">Staff Members</h1>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone
                            Number
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 p-4">
                    @foreach ($staffs as $staff)
                        <tr>
                            <td class="px-6 py-3">{{ $staff->staff_name }}</td>
                            <td>{{ $staff->staff_email }}</td>
                            <td>{{ $staff->staff_phone }}</td>
                            <td>123</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div id="staffModal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
        <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button"
                    class="close-modal-btn text-gray-500 hover:text-gray-700 focus:outline-none text-2xl">
                    &times;
                </button>
            </div>
            <div class="px-4 py-5 sm:p-6">
                <form action="{{ route('admin.department.staff.add') }}" method="POST">
                    @csrf
                    <input type="text" value="{{ $department->id }}" name="department_id" hidden>
                    <h1 class="font-bold text-lg">Add Staff</h1>
                    <div class="mt-2">
                        <label for="staff_name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="staff_name" id="staff_name" class="primary-input mt-1 block w-full"
                            required>
                    </div>
                    <div class="mt-2">
                        <label for="staff_email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="staff_email" id="staff_email" class="primary-input mt-1 block w-full"
                            required>
                    </div>
                    <div class="mt-2">
                        <label for="staff_phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input type="text" name="staff_phone" id="staff_phone" class="primary-input mt-1 block w-full"
                            required>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="primary-btn">Add Staff</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('staffModal');
            const openModalBtn = document.getElementById('openModalBtn');
            const closeModalBtn = document.querySelector('.close-modal-btn');

            openModalBtn.addEventListener('click', function() {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            });

            closeModalBtn.addEventListener('click', function() {
                modal.classList.remove('flex');
                modal.classList.add('hidden');
            });
        });
    </script>
@endsection
