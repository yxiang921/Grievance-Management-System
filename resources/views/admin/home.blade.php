@extends('layouts.app')

@section('content')
    <div class="p-6 bg-gray-100 min-h-screen">
        <div class="flex justify-center items-start mb-6 flex-col">
            <div class="flex w-full md:flex-row flex-col justify-center items-center">
                <div class="bg-white p-4 rounded-lg shadow w-full my-2">
                    <p class="text-xl font-bold text-center">24</p>
                    <p class="text-gray-600 text-center">Monthly Grievance</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow w-full my-2">
                    <p class="text-xl font-bold text-center">12</p>
                    <p class="text-gray-600 text-center">Monthly Resolved</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow w-full my-2">
                    <p class="text-xl font-bold text-center">51</p>
                    <p class="text-gray-600 text-center">Total Grievance</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow w-full my-2">
                    <p class="text-xl font-bold text-center">42</p>
                    <p class="text-gray-600 text-center">Total Resolved</p>
                </div>
            </div>
        </div>

        <!-- Recent Grievances -->
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-xl font-semibold mb-4">Recent Grievances</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h4 class="font-semibold rounded-lg flex justify-center items-center w-32 h-12 text-yellow-900 bg-yellow-100">Received</h4>

                    {{-- Grievance Card --}}
                    <div class="bg-gray-50 p-4 rounded-lg shadow mt-2">
                        <span class="text-sm text-green-500 font-semibold">Asset Issues</span>
                        <p class="mt-1">Broken Projector in Room 305</p>
                        <p class="text-gray-500 text-sm">The projector in Room 305 has been broken for a week. It’s not
                            turning on at all, and classes are being disrupted due to this issue.</p>
                        <p class="text-gray-400 text-xs mt-2">John Doe <br> 5:22pm, 23 June 2024, IEB Building</p>
                    </div>

                </div>

                <div>
                    <h4 class="font-semibold rounded-lg flex justify-center items-center w-32 h-12 text-orange-900 bg-orange-100">In Progress</h4>
                    <div class="bg-gray-50 p-4 rounded-lg shadow mt-2">
                        <span class="text-sm text-green-500 font-semibold">Asset Issues</span>
                        <p class="mt-1">Broken Projector in Room 305</p>
                        <p class="text-gray-500 text-sm">The projector in Room 305 has been broken for a week. It’s not
                            turning on at all, and classes are being disrupted due to this issue.</p>
                        <p class="text-gray-400 text-xs mt-2">John Doe <br> 5:22pm, 23 June 2024, IEB Building</p>
                    </div>
                </div>

                <div>
                    <h4 class="font-semibold rounded-lg flex justify-center items-center w-32 h-12 text-green-900 bg-green-100">Completed</h4>
                    <div class="bg-gray-50 p-4 rounded-lg shadow mt-2">
                        <span class="text-sm text-green-500 font-semibold">Asset Issues</span>
                        <p class="mt-1">Broken Projector in Room 305</p>
                        <p class="text-gray-500 text-sm">The projector in Room 305 has been broken for a week. It’s not
                            turning on at all, and classes are being disrupted due to this issue.</p>
                        <p class="text-gray-400 text-xs mt-2">John Doe <br> 5:22pm, 23 June 2024, IEB Building</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
