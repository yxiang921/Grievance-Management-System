@php
    use Carbon\Carbon;
@endphp

@extends('layouts.master')
@section('content')
    <div class="container mx-auto rounded-md">
        <div class="flex flex-col lg:flex-row">
            @foreach ($grievance as $grievance)
                <!-- Left Section -->
                <div class="lg:w-1/2 w-full h-screen flex flex-col lg:flex-row border border-gray-100 rounded-md mr-4">
                    <!-- Complaint Details -->
                    <div class="bg-white w-full h-full p-4 overflow-scroll no-scrollbar">
                        <div class="flex items-center mb-4">
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
                                <tr>
                                    @if ($grievance->location != null)
                                        <td class="pr-4"><strong>Location</strong></td>
                                        <td>
                                            {{ $grievance->location }}
                                        </td>
                                    @endif

                                </tr>
                                <tr>
                                    <td class="pr-4"><strong>Date</strong></td>
                                    <td>{{ Carbon::parse($grievance->grievance_created_at)->format('d F Y') }}</td>
                                </tr>
                                <tr>
                                    <td class="pr-4"><strong>Time</strong></td>
                                    <td>
                                        {{ Str::substr(Carbon::parse($grievance->grievance_created_at)->setTimezone('Asia/Kuala_Lumpur'), 11, 5) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pr-4"><strong>Remark</strong></td>
                                    <td>
                                        {{ $grievance->outsource_remark }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pr-4"><strong>Due Date</strong></td>
                                    <td>
                                        {{ Carbon::parse($grievance->due_date)->format('d F Y') }}
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="mb-4">
                            @if ($grievance->grievance_image)
                                <p class="pb-4"><strong>Image</strong></p>
                                <img src="{{ env('APP_URL') }}/{{ $grievance->grievance_image }}" alt="Image"
                                    class="w-full h-auto object-fit">
                            @endif
                        </div>
                    </div>
                </div>


                {{-- Right section --}}
                <div class="lg:w-1/2 w-full h-screen p-4 border border-gray-100 rounded-md overflow-scroll no-scrollbar">
                    <form class="h-full" method="POST" action="{{ route('department.grievance.update') }}"
                        enctype="multipart/form-data">
                        @csrf

                        @if ($grievance->status == 'Closed')
                            <div class="w-full mb-4 border border-primary-900 bg-primary-100 p-4 rounded-md">
                                <p class="text-primary-900">
                                    This grievance is closed. You can't update the status.
                                </p>
                            </div>
                        @endif
                        <h4 class="text-lg font-semibold mb-4">Grievances Process</h4>
                        <div class="mb-4">
                            <input type="text" hidden value="{{ $grievance->grievance_id }}" name="grievanceID">
                            <label class="block text-gray-700">Status</label>
                            <select {{ $grievance->status == 'Closed' ? 'disabled' : '' }}
                                class="primary-select w-full mt-2 {{ $grievance->status == 'Closed' ? 'cursor-not-allowed' : '' }}"
                                name="status" id="status" required>
                                <option value="" selected disabled>
                                    Select Status
                                </option>
                                <option value="In Progress" {{ $grievance->status == 'In Progress' ? 'selected' : '' }}>In
                                    Progress</option>
                                <option value="Closed" {{ $grievance->status == 'Closed' ? 'selected' : '' }}>Closed
                                </option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700">Person in Charged </label>
                            <select class="primary-select w-full mt-2" name="person_in_charged" required
                                {{ $grievance->status == 'Closed' ? 'disabled' : '' }}>
                                @foreach ($staffs as $staff)
                                    <option value="{{ $staff->staff_name }}"
                                        {{ $grievance->person_in_charged == $staff->staff_name ? 'selected' : '' }}>
                                        {{ $staff->staff_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700">Remark</label>
                            <textarea class ="primary-input w-full mt-2 {{ $grievance->status == 'Closed' ? 'cursor-not-allowed' : '' }}"
                                rows="6" name="process_remark" required {{ $grievance->status == 'Closed' ? 'disabled' : '' }}>
@if ($grievance->process_remark)
{{ $grievance->process_remark }}
@endif
</textarea>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700">Process Image</label>
                            <input {{ $grievance->status == 'Closed' ? 'disabled' : '' }} type="file"
                                class="primary-input w-full mt-2 {{ $grievance->status == 'Closed' ? 'cursor-not-allowed' : '' }}"
                                name="process_image" accept="image/*">
                        </div>
                        <div class="flex flex-col justify-between">
                            <button {{ $grievance->status == 'Closed' ? 'disabled' : '' }} class="primary-btn"
                                type="submit">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection
