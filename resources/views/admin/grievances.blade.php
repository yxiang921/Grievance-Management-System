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
            <!-- Single Card -->
            <div class="bg-white p-4 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <img src="http://picsum.photos/200/200" alt="Avatar" class="w-12 h-12 rounded-full">
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold">John Doe</h3>
                        <p class="text-gray-600">johndoe@gmail.com</p>
                    </div>
                </div>
                <span
                    class="inline-flex 
                    items-center 
                    rounded-md 
                    bg-yellow-100 
                    px-2 py-1 
                    text-xs 
                    font-medium text-yellow-900 ring-1 ring-inset ring-yellow-900/20">In Progress</span>
                <h4 class="text-lg font-semibold mb-2">Broken Projector in Room 305</h4>
                <p class="text-gray-600 mb-4">
                    The projector in Room 305 has been broken for a week. It’s not turning on at all, and classes are being
                    disrupted due to this issue.
                </p>
                <button
                    class="md:w-1/2 w-full bg-primary-900 text-white px-4 py-2 rounded-lg hover:bg-primary-100 transition-all focus:outline-none focus:ring-2 focus:ring-primary-900">
                    Read
                </button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <img src="http://picsum.photos/200/200" alt="Avatar" class="w-12 h-12 rounded-full">
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold">John Doe</h3>
                        <p class="text-gray-600">johndoe@gmail.com</p>
                    </div>
                </div>
                <span
                    class="inline-flex 
                    items-center 
                    rounded-md 
                    bg-yellow-100 
                    px-2 py-1 
                    text-xs 
                    font-medium text-yellow-900 ring-1 ring-inset ring-yellow-900/20">In Progress</span>
                <h4 class="text-lg font-semibold mb-2">Broken Projector in Room 305</h4>
                <p class="text-gray-600 mb-4">
                    The projector in Room 305 has been broken for a week. It’s not turning on at all, and classes are being
                    disrupted due to this issue.
                </p>
                <button
                    class="md:w-1/2 w-full bg-primary-900 text-white px-4 py-2 rounded-lg hover:bg-primary-100 transition-all focus:outline-none focus:ring-2 focus:ring-primary-900">
                    Read
                </button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <img src="http://picsum.photos/200/200" alt="Avatar" class="w-12 h-12 rounded-full">
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold">John Doe</h3>
                        <p class="text-gray-600">johndoe@gmail.com</p>
                    </div>
                </div>
                <span
                    class="inline-flex 
                    items-center 
                    rounded-md 
                    bg-yellow-100 
                    px-2 py-1 
                    text-xs 
                    font-medium text-yellow-900 ring-1 ring-inset ring-yellow-900/20">In Progress</span>
                <h4 class="text-lg font-semibold mb-2">Broken Projector in Room 305</h4>
                <p class="text-gray-600 mb-4">
                    The projector in Room 305 has been broken for a week. It’s not turning on at all, and classes are being
                    disrupted due to this issue.
                </p>
                <button
                    class="md:w-1/2 w-full bg-primary-900 text-white px-4 py-2 rounded-lg hover:bg-primary-100 transition-all focus:outline-none focus:ring-2 focus:ring-primary-900">
                    Read
                </button>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <img src="http://picsum.photos/200/200" alt="Avatar" class="w-12 h-12 rounded-full">
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold">John Doe</h3>
                        <p class="text-gray-600">johndoe@gmail.com</p>
                    </div>
                </div>
                <span
                    class="inline-flex 
                    items-center 
                    rounded-md 
                    bg-yellow-100 
                    px-2 py-1 
                    text-xs 
                    font-medium text-yellow-900 ring-1 ring-inset ring-yellow-900/20">In Progress</span>
                <h4 class="text-lg font-semibold mb-2">Broken Projector in Room 305</h4>
                <p class="text-gray-600 mb-4">
                    The projector in Room 305 has been broken for a week. It’s not turning on at all, and classes are being
                    disrupted due to this issue.
                </p>
                <button
                    class="md:w-1/2 w-full bg-primary-900 text-white px-4 py-2 rounded-lg hover:bg-primary-100 transition-all focus:outline-none focus:ring-2 focus:ring-primary-900">
                    Read
                </button>
            </div>
        </div>
    </div>
@endsection
