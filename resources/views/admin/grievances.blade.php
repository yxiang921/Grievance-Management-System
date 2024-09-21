@extends('layouts.master')

@section('content')
    <div class="container mx-auto p-4">
        <div class="flex flex-col items-start justify-start mb-4">
            <div class="flex flex-col lg:flex-row w-full text-gray-500">
                <div class="w-full lg:w-1/4">
                    <input type="text" placeholder="Search by title"
                        class="transition-all w-full h-12 px-4 py-2 border  rounded-md focus:outline-none focus:ring-1 focus:ring-primary-100 focus:border-primary-900">
                </div>
                <div class="w-full lg:w-1/4 my-4 mx-0 lg:my-0 lg:mx-4">
                    <input type="date"
                        class="transition-all   w-full h-12 px-4 py-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-primary-100 focus:border-primary-900">
                </div>
                <div class="w-full lg:w-1/4">
                    <x-dropdown :items="['Received', 'In-Progress', 'Closed']" label="Select Status" />
                </div>
            </div>
            <div class="w-full md:w-1/6 my-2">
                <button
                    class="primary-btn w-full">
                    Search
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-4">
            <x-grievance-card></x-grievance-card>
            <x-grievance-card></x-grievance-card>
            <x-grievance-card></x-grievance-card>
        </div>
    </div>
@endsection
