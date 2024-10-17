@extends('layouts.master')

@section('content')
    <div class="container mx-auto p-4">
        <form action="{{ route('admin.grievance.search') }}" method="POST"
            class="flex flex-col items-start justify-start mb-4">
            @csrf
            <div class="flex flex-col lg:flex-row w-full text-gray-500">
                <div class="w-full lg:w-1/4">
                    <input type="text" placeholder="Search by keywords" class="primary-input w-full" name="keyword"
                        value="{{ request('keyword') }}">
                </div>
                <div class="w-full lg:w-1/4 my-4 mx-0 lg:my-0 lg:mx-4">
                    <input type="datetime-local" class="primary-input w-full" name="datetime"
                        value="{{ request('datetime') }}">
                </div>
                <div class="w-full lg:w-1/4">
                    {{-- <x-filter-dropdown :items="['Received', 'In-Progress', 'Closed']" label="Select Status" /> --}}
                    <select name="status" id="status" class="primary-select w-full">
                        <option selected disabled value="">Select Status</option>
                        <option value="Received" {{ request('status') == 'Received' ? 'selected' : '' }}>Received</option>
                        <option value="In Progress">In Progress</option>
                        <option value="Closed">Closed</option>
                    </select>
                </div>
            </div>
            <div class="w-full md:w-1/2 my-2 flex flex-row items-center">
                <button class="primary-btn w-1/2">
                    Search
                </button>
                <a href="{{ route('admin.grievances') }}" class="ml-12 underline">Clear Filter</a>
            </div>
        </form>

        <div id="grievance-list" class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-4">
            @if ($grievances->count() == 0)
                No grievances was found based on your search criteria.
            @endif
            @foreach ($grievances as $grievance)
                <x-grievance-card :grievance="$grievance" />
            @endforeach
        </div>
    </div>

    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/laravel-echo@1.11.3/dist/echo.iife.js"></script>

    <script>
        const pusher = new Pusher('{{ env('MIX_PUSHER_APP_KEY') }}', {
            cluster: '{{ env('MIX_PUSHER_APP_CLUSTER') }}',
            forceTLS: true
        });

        window.Echo = new Echo({
            broadcaster: 'pusher',
            client: pusher
        });

        window.Echo.channel('grievance')
            .listen('NewGrievance', (e) => {

                console.log('New complaint submitted:', e.grievance);

                showNotification(e.grievance);
            });

        function showNotification(grievance) {
            let grievanceList = document.getElementById('grievance-list');

            const statusBadge = {
                'Received': 'received-badge',
                'In Progress': 'in-progress-badge',
                'Closed': 'closed-badge',
            };

            const grievanceTitle = grievance.title.length > 30 ? `${grievance.title.substring(0, 30)}...` : grievance.title;
            const grievanceDescription = grievance.description.length > 100 ?
                `${grievance.description.substring(0, 100)}...` : grievance.description;

            const grievanceComponent = `
            <div class="bg-white p-4 rounded-lg shadow-md flex flex-col items-start justify-between">
                <div class="flex items-center mb-4">
                    <img src="" alt="Avatar" class="w-12 h-12 rounded-full">
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold">grievance name</h3>
                        <p class="text-gray-600">email</p>
                    </div>
                </div>
                <span class="status-badge
                    ${statusBadge[grievance.status]}
                    ">Status</span>
                <h4 class="text-lg font-semibold my-2">
                ${grievanceTitle}
                </h4>
                <p class="text-gray-600 mb-4 text-justify">
                ${grievanceDescription}
                </p>
                <button class="md:w-1/2 w-full primary-btn"
                    onclick="">
                    Read
                </button>
            </div>
        `;

            grievanceList.insertAdjacentHTML('beforeend', grievanceComponent);

        }
    </script>
@endsection
