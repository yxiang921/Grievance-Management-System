@extends('layouts.master')
@section('content')
    <div class="w-full min-h-screen max-h-screen grid grid-cols-1 xl:grid-cols-5">
        <div class="col-span-1 xl:col-span-3" id="map"></div>
        <div
            class="col-span-1 xl:col-span-2 my-4 p-4 md:my-0 xl:ml-4 border border-gray-100 rounded-md max-h-screen overflow-y-scroll no-scrollbar">
            <h1 class="text-2xl font-semibold text-gray-900">Facility Issues</h1>
            <p class="text-gray-600">Here is the view of all facility issues found from user which not yet solved.</p>

            @foreach ($map_grievances as $grievance)
                <!-- Accordion -->
                <div class="border-b border-slate-200 mt-4">
                    <button onclick="toggleAccordion({{ $loop->index + 1 }})"
                        class="w-full flex justify-between items-center py-5 text-slate-800">
                        <div class="flex flex-row items-center w-full">
                            <span class="w-1/4 bg-red-100 text-red-900 py-1 px-2 rounded-sm">{{ $grievance->status }}</span>
                            <span class="pl-4">
                                {{ Str::limit($grievance->title, 20) }}
                            </span>
                        </div>
                        <span id="icon-{{ $loop->index + 1 }}" class="text-slate-800 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                <path
                                    d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                            </svg>
                        </span>
                    </button>
                    <div id="content-{{ $loop->index + 1 }}"
                        class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="pb-5 text-sm text-slate-500">
                            {{ $grievance->description }}
                        </div>
                        <div class="flex justify-between items-center">
                            <a href="{{ route('department.grievance.detail', $grievance->id) }}"
                                class="text-blue-500 hover:underline">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <script>
        const map_grievances = @json($map_grievances);

        console.log(map_grievances);

        var map = L.map('map', {
            zoomControl: false,
            dragging: false,
            minZoom: 17,
        }).setView([1.5336486914588254, 103.68175560084585], 17);


        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map);


        var polygon = L.polygon([
            [1.535561, 103.681848],
            [1.534066, 103.683847],
            [1.531622, 103.681532],
            [1.533203, 103.679669],
        ], {
            fillOpacity: 0
        }).addTo(map);

        map_grievances.forEach(grievance => {

            if (grievance.latitude && grievance.longitude) {
                console.log(grievance);
                var circle = L.circle([grievance.latitude, grievance.longitude], {
                    color: 'red',
                    fillColor: '#f03',
                    fillOpacity: 0.3,
                    radius: 20,
                }).addTo(map);
            } else {
                console.log('no location')
            }


        });
    </script>

    <script>
        function toggleAccordion(index) {
            const content = document.getElementById(`content-${index}`);
            const icon = document.getElementById(`icon-${index}`);

            const minusSVG = `
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                            <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
                            </svg>
                            `;

            const plusSVG = `
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                            <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                            </svg>
                            `;

            if (content.style.maxHeight && content.style.maxHeight !== '0px') {
                content.style.maxHeight = '0';
                icon.innerHTML = plusSVG;
            } else {
                content.style.maxHeight = content.scrollHeight + 'px';
                icon.innerHTML = minusSVG;
            }
        }
    </script>
@endsection
