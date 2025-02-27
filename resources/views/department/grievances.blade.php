@extends('layouts.master')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <div class="container mx-auto p-4">
        <form action="{{ route('department.grievance.search') }}" method="POST"
            class="flex flex-col items-start justify-start mb-4">
            @csrf
            <div class="flex flex-col lg:flex-row w-full text-gray-500">
                <div class="w-full lg:w-1/4">
                    <input type="text" placeholder="Search by keywords" class="primary-input w-full" name="keyword"
                        value="{{ request('keyword') }}">
                </div>
                <div class="w-full lg:w-1/4 my-4 mx-0 lg:my-0 lg:mx-4">
                    {{-- <input type="datetime-local" class="primary-input w-full" name="datetime"
                        value="{{ request('datetime') }}"> --}}
                    <input class="primary-input w-full" onchange="javascript: console.log(this.value)"
                        placeholder="Select Date Range" type="text" id="date_range" name="datetime"
                        value="{{ request('datetime') }}" required>
                </div>
                <div class="w-full lg:w-1/4">
                    {{-- <x-filter-dropdown :items="['Received', 'In-Progress', 'Closed']" label="Select Status" /> --}}
                    <select name="status" id="status" class="primary-select w-full">
                        <option selected disabled value="">Select Status</option>
                        <option value="Received" {{ request('status') == 'Received' ? 'selected' : '' }}>Received</option>
                        <option value="In Progress">In Progress</option>
                        <option value="Closed">Closed</option>
                    </select>
                </div>
            </div>
            <div class="w-full md:w-1/2 my-2 flex flex-row items-center">
                <button class="primary-btn w-1/2">
                    Search
                </button>
                <a href="{{ route('department.grievances') }}" class="ml-12 underline">Clear Filter</a>
            </div>
        </form>

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-4">
            @foreach ($grievances as $grievance)
                <x-grievance-card :grievance="$grievance" />
            @endforeach
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr("#date_range", {
                mode: "range",
                enableTime: true,
                dateFormat: "Y-m-d H:i",
                time_24hr: true,
            });
        });
    </script>
@endsection
