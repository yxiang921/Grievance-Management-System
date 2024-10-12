@php
    use Carbon\Carbon;
@endphp

@extends('layouts.master')
@section('content')
    <div class="container mx-auto rounded-md"z>
        <div class="flex flex-col lg:flex-row">
            @foreach ($grievanceDetail as $grievance)
                <!-- Left Section -->
                <div class="lg:w-1/2 w-full h-screen flex flex-col lg:flex-row border border-gray-100 rounded-md mr-4">
                    <!-- Complaint Details -->
                    <div class="bg-white w-full h-full p-4 overflow-scroll no-scrollbar rounded-md">

                        @if ($grievance->status == 'Received')
                            <x-received-progress />
                        @elseif ($grievance->status == 'In Progress')
                            <x-in-progress />
                        @elseif ($grievance->status == 'Closed')
                            <x-close-progress />
                        @endif

                        <div class="flex items-center mt-8 mb-4">
                            <img src="{{ $grievance->avatar }}" alt="Avatar" class="w-12 h-12 rounded-full">
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
                                @if ($grievance->location)
                                    <tr>
                                        <td class="pr-4"><strong>Location</strong></td>
                                        <td>{{ $grievance->location }}</td>
                                    </tr>
                                @endif
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
                            @if ($grievance->grievance_image)
                                <p class="pb-4"><strong>Image</strong></p>
                                <img src="{{ $grievance->grievance_image }}" alt="Grievance Image"
                                    class="w-full h-40 object-cover rounded-md">
                            @endif
                        </div>
                    </div>
                </div>

                {{-- Right section --}}
                <div
                    class="lg:w-1/2 w-full h-screen p-4 border border-gray-100 rounded-md overflow-scroll no-scrollbar relative">

                    @if ($grievance->is_assigned && $grievance->status != 'Closed')
                        <div class="w-full mb-4 border border-primary-900 bg-primary-100 p-4 rounded-md">
                            <p class="text-primary-900">
                                This grievance has been assigned to
                                <strong>{{ $grievance->department_name }}</strong>
                            </p>
                        </div>
                    @elseif ($grievance->is_assigned && $grievance->status == 'Closed')
                        <div class="w-full mb-4 border border-primary-900 bg-primary-100 p-4 rounded-md">
                            <p class="text-primary-900">
                                This grievance has been closed.
                            </p>
                        </div>
                    @endif

                    <div class="w-full h-14 grid grid-cols-3 gap-2 ">
                        <button class="tab-btn rounded-md tab-active"
                            onclick="changeTab('assignment', this)">Assignment</button>
                        <button class="tab-btn rounded-md" onclick="changeTab('reply', this)">Reply</button>
                        <button
                            class="bg-primary-900 w-3/4 h-14 flex items-center justify-center text-white rounded-md transition-all hover:bg-primary-hover focus:outline-none focus:ring-2 focus:ring-green-200"
                            onclick="AIGenerate()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-stars mr-2" viewBox="0 0 16 16">
                                <path
                                    d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z" />
                            </svg>
                            AI Generate
                        </button>
                    </div>
                    <form id="assignment" class="grievanceTab h-full mt-4" method="POST"
                        action="{{ route('admin.grievance.assign') }}">
                        @csrf
                        <div class="mb-4">
                            <input type="text" hidden value="{{ $grievance->grievance_id }}" name="grievanceID">
                            <label class="block text-gray-700">Category</label>
                            <select class="primary-select w-full mt-2" name="category" id="category" required
                                {{ $grievance->status == 'Closed' ? 'disabled' : '' }}>
                                <option value="" selected disabled>
                                    Select Category
                                </option>
                                <option value="Facility" {{ $grievance->category == 'Facility' ? 'selected' : '' }}>
                                    Facility</option>
                                <option value="Academic" {{ $grievance->category == 'Academic' ? 'selected' : '' }}>
                                    Academic</option>
                                <option value="Finance" {{ $grievance->category == 'Finance' ? 'selected' : '' }}>Finance
                                </option>
                                <option value="Behaviour" {{ $grievance->category == 'Behaviour' ? 'selected' : '' }}>
                                    Behaviour</option>
                                <option value="Other" {{ $grievance->category == 'Other' ? 'selected' : '' }}>Other
                                </option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700">Department</label>
                            <select class="primary-select w-full mt-2" name="departmentID" id="department" required
                                {{ $grievance->status == 'Closed' ? 'disabled' : '' }}>
                                <option value="" selected>
                                    {{ $grievance->is_assigned ? $grievance->department_name : 'Please Select Category First' }}
                                </option>

                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700" for="duedate">Due Date</label>
                            <input type="datetime-local" class="primary-input w-full mt-2" name="duedate" required
                                value="{{ $grievance->is_assigned ? Carbon::parse($grievance->due_date)->format('Y-m-d\TH:i') : '' }}"
                                {{ $grievance->status == 'Closed' ? 'disabled' : '' }}>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700">Priority</label>
                            <select class="primary-select w-full mt-2" name="priority" required
                                {{ $grievance->status == 'Closed' ? 'disabled' : '' }}>
                                <option value="" selected disabled>
                                    Select Priority
                                </option>
                                <option value="Normal"
                                    {{ $grievance->is_assigned && $grievance->priority == 'Normal' ? 'selected' : '' }}>
                                    Normal
                                </option>
                                <option value="Medium"
                                    {{ $grievance->is_assigned && $grievance->priority == 'Medium' ? 'selected' : '' }}>
                                    Medium
                                </option>
                                <option value="High"
                                    {{ $grievance->is_assigned && $grievance->priority == 'High' ? 'selected' : '' }}>
                                    High
                                </option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700">Outsource Remark</label>
                            <textarea class="primary-textarea w-full mt-2 " rows="6" name="outsourceRemark"
                                {{ $grievance->status == 'Closed' ? 'disabled' : '' }}>{{ $grievance->is_assigned ? $grievance->outsource_remark : '' }}</textarea>
                        </div>
                        <div class="flex flex-col justify-between">
                            <button class="primary-btn" type="submit"
                                {{ $grievance->status == 'Closed' ? 'disabled' : '' }}>
                                Assign Grievance
                            </button>

                            <a class="delete-btn w-full text-center"
                                href="{{ route('admin.grievance.close', ['grievance_id' => $grievance->grievance_id]) }}"
                                {{ $grievance->status == 'Closed' ? 'disabled' : '' }}>
                                Close Case
                            </a>
                        </div>
                    </form>

                    <div id="reply" class="grievanceTab hidden w-full h-full mt-4">
                        <div class="mb-4">
                            <input type="text" hidden value="{{ $grievance->grievance_id }}" name="grievanceID">
                            <label class="block text-gray-700">Process Remark</label>
                            <textarea class="primary-input w-full mt-2" rows="6" readonly>
@if ($grievance->process_remark)
{{ $grievance->process_remark }}
@endif
</textarea>
                        </div>
                        <div class="mb-4">
                            @if ($grievance->process_image)
                                <label class="block text-gray-700">Process Image</label>
                                <img src="{{ asset('process_images/' . $grievance->process_image) }}" alt="Process Image"
                                    class="w-full h-auto object-cover rounded-md">
                            @endif
                        </div>
                        <a class="delete-btn w-full text-center"
                            href="{{ route('admin.grievance.close', ['grievance_id' => $grievance->grievance_id]) }}">Close
                            Case</a>
                    </div>


                </div>
            @endforeach
        </div>
    </div>

    <script>
        const departments = @json($departments);
        let departmentName;

        const categorySelector = document.querySelector('select#category');
        const departmentSelector = document.querySelector('select#department');
        const tabBtns = document.querySelectorAll('.tab-btn');

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

        tabBtns[0].addEventListener('click', () => {
            tabBtns[0].classList.add('tab-active');
            tabBtns[1].classList.remove('tab-active');
        });

        tabBtns[1].addEventListener('click', () => {
            tabBtns[1].classList.add('tab-active');
            tabBtns[0].classList.remove('tab-active');
        });


        function changeTab(tabName, thisTab) {
            var i;
            var x = document.getElementsByClassName("grievanceTab");

            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }

            document.getElementById(tabName).style.display = "block";
        }

        function AIGenerate() {
            alert('AI is not available at the moment');
        }
    </script>
@endsection
