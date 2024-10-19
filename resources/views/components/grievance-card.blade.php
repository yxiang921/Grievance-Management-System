@php
    use Illuminate\Support\Str;

    $status = $grievance->status;
    $badgeClass = [
        'Received' => 'received-badge',
        'In Progress' => 'in-progress-badge',
        'Closed' => 'closed-badge',
    ];
@endphp

<div class="bg-white p-4 rounded-lg shadow-md flex flex-col items-start justify-between">
    <div class="flex items-center mb-4">
        <img src="{{ $grievance->avatar }}" alt="Avatar" class="w-12 h-12 rounded-full">
        <div class="ml-4">
            <h3 class="text-lg font-semibold">{{ $grievance->name }}</h3>
            <p class="text-gray-600">{{ $grievance->email }}</p>
        </div>
    </div>
    <span class="status-badge
        {{ $badgeClass[$status] }}
        ">{{ $grievance->status }}</span>
    <h4 class="text-lg font-semibold my-2">
        {{ Str::limit($grievance->title, 30, '...') }}
    </h4>
    <p class="text-gray-600 mb-4 text-justify">
        {{ Str::limit($grievance->description, 100, '...') }}
    </p>
    <button class="md:w-1/2 w-full primary-btn"
        onclick="window.location.href = '{{ Auth::guard('admin')->check() ? route('admin.grievance.detail', ['grievance_id' => $grievance->grievance_id]) : route('department.grievance.detail', ['grievance_id' => $grievance->grievance_id]) }}'">
        Read
    </button>
</div>
