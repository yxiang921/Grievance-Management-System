<div class="bg-white p-4 rounded-lg shadow-md">
    <div class="flex items-center mb-4">
        <img src="http://picsum.photos/200/200" alt="Avatar" class="w-12 h-12 rounded-full">
        <div class="ml-4">
            <h3 class="text-lg font-semibold">{{ $grievance->name }}</h3>
            <p class="text-gray-600">{{ $grievance->email }}</p>
        </div>
    </div>
    <span
        class="inline-flex 
        items-center 
        rounded-md 
        bg-yellow-100 
        px-2 py-1 
        text-xs 
        font-medium text-yellow-900 ring-1 ring-inset ring-yellow-900/20">{{ $grievance->status }}</span>
    <h4 class="text-lg font-semibold my-2">{{ $grievance->title }}</h4>
    <p class="text-gray-600 mb-4">
        {{ $grievance->description}}
    </p>
    <button
        class="md:w-1/2 w-full primary-btn"
        onclick="window.location.href = '{{ route('admin.grievance.detail', ['grievance_id' => $grievance->grievance_id]) }}'"
        >
        Read
    </button>
</div>