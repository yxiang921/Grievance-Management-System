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
                                    <td class="pr-4 text-primary-900"><strong>Due Date</strong></td>
                                    <td>
                                        Due date...
                                    </td>
                                </tr>
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
                <div class="lg:w-1/2 w-full h-screen p-4 border border-gray-100 rounded-md overflow-scroll no-scrollbar">
                    <form class="h-full" method="POST" action="{{ route('admin.grievance.assign') }}">
                        @csrf
                        <h4 class="text-lg font-semibold mb-4">Grievances Process</h4>
                        <div class="mb-4">
                            <input type="text" hidden value="{{ $grievance->grievance_id }}" name="grievanceID">
                            <label class="block text-gray-700">Status</label>
                            <select class="primary-select w-full mt-2" name="" id="status" required>
                                <option value="" selected disabled>
                                    Select Status
                                </option>
                                <option value="In Progress">In Progress</option>
                                <option value="Closed">Closed</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700">Remark</label>
                            <textarea class="primary-input w-full mt-2" rows="6"></textarea>
                        </div>
                        <div class="flex flex-col justify-between">
                            <button class="primary-btn">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection
