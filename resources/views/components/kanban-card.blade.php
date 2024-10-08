@php
    use Carbon\Carbon;
    use Illuminate\Support\Str;
@endphp

<div 
class="bg-gray-50 p-4 rounded-lg shadow-lg mt-2 hover:cursor-pointer"
onclick="window.location='{{ Auth::guard('admin')->check() ? route('admin.grievance.detail', $grievance->id) : route('department.grievance.detail', $grievance->id) }}'"
>
    <span class="text-sm text-green-500 font-semibold">{{ $grievance->category }} Issue</span>
    <p class="mt-1">{{ Str::limit($grievance->title, 30, '...') }}</p>
    <p class="text-gray-500 text-sm text-justify">
        {{ Str::limit($grievance->description, 100, '...') }}
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
