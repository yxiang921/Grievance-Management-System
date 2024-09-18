@extends('layouts.master')

@section('content')
    <div class="container mx-auto p-4">
        <div class="flex flex-col items-start justify-start mb-4">
            <div class="flex flex-col md:flex-row w-full">
                <div class="w-full md:w-1/3 mr-2 md:mb-0">
                    <input type="text" placeholder="Search by title"
                        class="shadow-md focus:shadow-none transition-all w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                <div class="w-full md:w-1/4 mr-2 md:mb-0">
                    <input type="date"
                        class="shadow-md focus:shadow-none transition-all w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-900">
                </div>
                <div class="w-full md:w-1/4 mr-2 md:mb-0">
                    <select
                        class="shadow-md focus:shadow-none transition-all w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-900">
                        <option value="">Status</option>
                        <option value="open">Open</option>
                        <option value="closed">Closed</option>
                    </select>
                </div>
            </div>
            <div class="w-full md:w-1/6 my-2">
                <button
                    class="w-full bg-primary-900 text-white px-4 py-2 rounded-lg transition-all hover:bg-primary-100 focus:outline-none focus:ring-2 focus:ring-green-500">
                    Search
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <x-grievance-card></x-grievance-card>
            <x-grievance-card></x-grievance-card>
            <x-grievance-card></x-grievance-card>
        </div>
    </div>
@endsection
