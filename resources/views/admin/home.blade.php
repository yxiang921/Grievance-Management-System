@extends('layouts.app')

@section('content')
<div class="p-6 bg-gray-100 min-h-screen">
    <!-- Dashboard Header -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-2xl font-semibold">Dashboard</h2>
            <p class="text-gray-600">Hello Admin, Welcome Back!</p>
        </div>
        <div class="flex space-x-4">
            <div class="bg-white p-4 rounded-lg shadow">
                <p class="text-xl font-bold text-center">24</p>
                <p class="text-gray-600 text-center">Monthly Grievance</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <p class="text-xl font-bold text-center">12</p>
                <p class="text-gray-600 text-center">Monthly Resolved</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <p class="text-xl font-bold text-center">51</p>
                <p class="text-gray-600 text-center">Total Grievance</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
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
                <h4 class="font-semibold text-yellow-600">Received</h4>
                <div class="bg-gray-50 p-4 rounded-lg shadow mt-2">
                    <span class="text-sm text-green-500 font-semibold">Asset Issues</span>
                    <p class="mt-1">Broken Projector in Room 305</p>
                    <p class="text-gray-500 text-sm">The projector in Room 305 has been broken for a week. It’s not turning on at all, and classes are being disrupted due to this issue.</p>
                    <p class="text-gray-400 text-xs mt-2">John Doe, 5:22pm, 23 June 2024, IEB Building</p>
                </div>
            </div>

            <div>
                <h4 class="font-semibold text-yellow-600">In Progress</h4>
                <div class="bg-gray-50 p-4 rounded-lg shadow mt-2">
                    <span class="text-sm text-blue-500 font-semibold">Academic Issues</span>
                    <p class="mt-1">Unfair Grading in Physics Course</p>
                    <p class="text-gray-500 text-sm">The grading for the Physics 101 course seems unfair. Several students, including myself, have received grades that do not reflect our performance and effort.</p>
                    <p class="text-gray-400 text-xs mt-2">John Doe, 5:22pm, 23 June 2024</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg shadow mt-4">
                    <span class="text-sm text-green-500 font-semibold">Asset Issues</span>
                    <p class="mt-1">Faulty Air Conditioning in Library</p>
                    <p class="text-gray-500 text-sm">The air conditioning in the main library is not functioning properly. It’s too hot and uncomfortable for students to study.</p>
                    <p class="text-gray-400 text-xs mt-2">John Doe, 5:22pm, 23 June 2024, IEB Building</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg shadow mt-4">
                    <span class="text-sm text-green-500 font-semibold">Asset Issues</span>
                    <p class="mt-1">Damaged Chairs in Auditorium</p>
                    <p class="text-gray-500 text-sm">Several chairs in the auditorium are damaged and unusable. This is causing inconvenience during lectures and events.</p>
                    <p class="text-gray-400 text-xs mt-2">John Doe, 5:22pm, 23 June 2024, Main Hall</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
