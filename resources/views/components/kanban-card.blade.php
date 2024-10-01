@php
    use Carbon\Carbon;
@endphp

<div class="bg-gray-50 p-4 rounded-lg shadow-lg  mt-2">
    <span class="text-sm text-green-500 font-semibold">{{ $grievance->category }} Issue</span>
    <p class="mt-1">{{ $grievance->title }}</p>
    <p class="text-gray-500 text-sm">
        {{ $grievance->description }}
    </p>
    <p class="text-gray-400 text-xs mt-2">
        {{ $grievance->name }}
        <br>
        {{ Carbon::parse($grievance->grievance_created_at)->format('h : m A') }}
        <br>
        {{ Carbon::parse($grievance->grievance_created_at)->format('d F Y') }},
        <br>
        {{ $grievance->location }}
    </p>
</div>
