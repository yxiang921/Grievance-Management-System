@php
    use Carbon\Carbon;
@endphp

@extends('layouts.master')
@section('content')
    <div class="container mx-auto p-4 border border-gray-100 rounded-md">
        <div class="flex flex-col lg:flex-row">
            @foreach ($grievance as $grievance)
                <!-- Left Section -->
                <div class="lg:w-1/2 w-full flex flex-col lg:flex-row">
                    <!-- Complaint Details -->
                    <div class="bg-white p-4 h-screen w-full">
                        <!-- Progress Bar -->
                        <div class="flex flex-col items-center justify-between mb-6 relative w-full h-6 m-auto">
                            <div class="w-11/12 flex items-center justify-between relative">
                                {{-- point one --}}
                                <div class="received-line absolute left-0 w-1/2 h-1 bg-primary-900 rounded-full"></div>
                                <div class="received-line absolute right-0 w-1/2 h-1 bg-primary-100 rounded-full"></div>
                                <div class="received-pt w-5 h-5 rounded-full bg-primary-900 relative"></div>

                                {{-- point two --}}
                                <div class="inprogress-pt current-status w-5 h-5 rounded-full bg-primary-900 relative"></div>

                                {{-- point three --}}
                                <div class="closed-pt w-5 h-5 rounded-full bg-primary-900 relative"></div>
                            </div>
                            <div class="w-full h-2 flex justify-between items-center px-[0.4rem] pt-3">
                                <h3>Received</h3>
                                <h3>In Progress</h3>
                                <h3>Closed</h3>
                            </div>
                        </div>


                        <div class="flex items-center mt-8 mb-4">
                            <img src="https://picsum.photos/100/100" alt="Avatar" class="w-12 h-12 rounded-full">
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold">{{ $grievance->name }}</h3>
                                <p class="text-gray-600">{{ $grievance->email }}</p>
                                <p class="text-gray-600">{{ $grievance->phone_number }}</p>
                            </div>
                        </div>
                        <h4 class="text-lg font-semibold mb-2">{{ $grievance->title }}</h4>
                        <p class="text-gray-600 mb-4">
                            {{ $grievance->description }}
                        </p>
                        <div class="mb-4">
                            <table>
                                <tr>
                                    <td class="pr-4"><strong>Location</strong></td>
                                    <td>
                                        {{ $grievance->location }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pr-4"><strong>Date</strong></td>
                                    <td>{{ Carbon::parse($grievance->grievance_created_at)->format('d F Y') }}</td>
                                </tr>
                                <tr>
                                    <td class="pr-4"><strong>Time</strong></td>
                                    <td>
                                        {{ Carbon::parse($grievance->grievance_created_at)->format('h : m A') }}
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="mb-4">
                            <p class="pb-4"><strong>Image</strong></p>
                            <div class="w-full h-40 bg-gray-200 rounded-lg"></div>
                        </div>
                    </div>
                </div>

                {{-- Right section --}}
                <div class="lg:w-1/2 w-full h-full  pl-4 pt-4">
                    <form class="h-full" method="POST" action="{{ route('admin.grievance.assign') }}">
                        @csrf
                        <h4 class="text-lg font-semibold mb-4">Grievances Assign</h4>
                        <div class="mb-4">
                            <input type="text" hidden value="{{ $grievance->grievance_id }}" name="grievanceID">
                            <label class="block text-gray-700">Category</label>
                            <select class="primary-select w-full mt-2" name="" id="category" required>
                                <option value="" selected disabled>
                                    Select Category
                                </option>
                                <option value="Facility">Facility</option>
                                <option value="Academic">Academic</option>
                                <option value="Finance">Finance</option>
                                <option value="Behaviour">Behaviour</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700">Department</label>
                            <select class="primary-select w-full mt-2" name="departmentID" id="department" required>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700">Outsource Remark</label>
                            <textarea class="primary-input w-full mt-2" rows="6"></textarea>
                        </div>
                        <div class="flex flex-col justify-between">
                            <button class="primary-btn">
                                Assign Grievance
                            </button>
                            <button class="delete-btn">
                                Close Case
                            </button>
                        </div>
                    </form>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        const departments = @json($departments);
        let departmentName;

        const categorySelector = document.querySelector('select#category');
        const departmentSelector = document.querySelector('select#department');

        categorySelector.addEventListener('change', (e) => {


            departmentSelector.innerHTML = '';

            departments.forEach(department => {
                if (department.department_category === e.target.value) {

                    insertDepartment(department.department_name, department.department_id);

                } else if (e.target.value === 'Other') {

                    insertDepartment(department.department_name, department.department_id);

                }
            });

        });

        function insertDepartment(departmentName, departmentID) {
            let option = document.createElement('option');

            option.text = departmentName;
            option.value = departmentID;

            departmentSelector.appendChild(option);
        }
    </script>
@endsection
