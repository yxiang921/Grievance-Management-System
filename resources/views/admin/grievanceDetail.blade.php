@extends('layouts.master')
@section('content')
    <div class="container mx-auto p-4">
        <div class="flex flex-col md:flex-row">
            <!-- Left Section -->
            <div class="w-full flex flex-col md:flex-row">
                <!-- Complaint Details -->
                <div class="bg-white w-1/2 p-4 h-screen shadow-md">
                    <!-- Progress Bar -->
                    <div class="flex items-center mb-6 bg-red-300">
                        {{-- POINT 1 --}}
                        <div class="flex-1 h-full flex items-center">
                            <div class="circle-point bg-primary-900 text-white py-1 px-2 rounded-full w-4 h-4 text-center"></div>
                            <div class="flex-1 border-t-2 border-primary-900"></div>
                        </div>
                        {{-- POINT 2 --}}
                        <div class="flex-1 h-full flex items-center">
                            <div
                                class="circle-point current bg-primary-900 text-white py-1 px-2 rounded-full w-4 h-4 text-center">
                            </div>
                            <div class="flex-1 border-t-2 border-primary-900"></div>
                        </div>
                        {{-- POINT 3 --}}
                        <div class="flex-1 h-full flex items-center">
                            <div class="bg-primary-900 text-white py-1 px-2 rounded-full w-4 h-4 text-center"></div>
                        </div>
                    </div>
                    <div class="flex items-center mb-4">
                        <img src="https://picsum.photos/100/100" alt="Avatar" class="w-12 h-12 rounded-full">
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold">John Doe</h3>
                            <p class="text-gray-600">johndoe@gmail.com</p>
                            <p class="text-gray-600">012 345 6789</p>
                        </div>
                    </div>
                    <h4 class="text-lg font-semibold mb-2">Broken Projector in Room 305</h4>
                    <p class="text-gray-600 mb-4">
                        The projector in Room 305 has been broken for a week. It’s not turning on at all, and classes are
                        being disrupted due to this issue.
                    </p>
                    <div class="mb-4">
                        <table>
                            <tr>
                                <td class="pr-4"><strong>Location</strong></td>
                                <td>IEB203</td>
                            </tr>
                            <tr>
                                <td class="pr-4"><strong>Date</strong></td>
                                <td>12th August 2021</td>
                            </tr>
                            <tr>
                                <td class="pr-4"><strong>Time</strong></td>
                                <td>10:30 AM</td>
                            </tr>
                        </table>
                    </div>
                    <div class="mb-4">
                        <p class="pb-4"><strong>Image</strong></p>
                        <div class="w-full h-40 bg-gray-200 rounded-lg"></div>
                    </div>
                </div>
                <div class="w-1/2 h-full bg-white pl-4 pt-4">
                    <div class="h-full">
                        <h4 class="text-lg font-semibold mb-4">Grievances Assign</h4>
                        <div class="mb-4">
                            <label class="block text-gray-700">Category</label>
                            <select
                                class="transition-all w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-900 text-gray-700"
                                name="" id="">
                                <option value="Facility">Facility</option>
                                <option value="Academic">Academic</option>
                                <option value="Finance">Finance</option>
                                <option value="Behaviour">Behaviour</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700">Department</label>
                            <select
                                class="transition-all w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-900 text-gray-700"
                                name="" id="">
                                <option value="Facility">Asset and General Affair Office</option>
                                <option value="Academic">Student Affair Office</option>
                                <option value="Finance">Account and Finance Office</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700">Staff</label>
                            <input type="text"
                                class="transition-all w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-900">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700">Outsource Remark</label>
                            <textarea
                                class="transition-all w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-900"></textarea>
                        </div>
                        <div class="flex flex-col justify-between">
                            <button
                                class="bg-primary-900 text-white px-4 py-2 my-2 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-primary-900">
                                Assign Grievance
                            </button>
                            <button
                                class="bg-red-200 text-red-600 px-4 py-2 my-2 rounded-lg hover:bg-red-300 focus:outline-none focus:ring-2 focus:ring-red-400">
                                Close Case
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
