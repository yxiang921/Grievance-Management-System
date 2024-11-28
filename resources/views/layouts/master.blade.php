<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @include('layouts.partials.head')
    @include('layouts.partials.cdn')
</head>

<body class="bg-purple-100/20 font-sans" id="appBody">



    <div class="flex">
        @if (Auth::guard('admin')->check())
            <x-sidebar></x-sidebar>
        @else
            <x-department-sidebar></x-department-sidebar>
        @endif

        <!-- Main Content -->
        <div class="flex-1 p-4">
            <x-header></x-header>
            <div class="w-full mt-4 text-gray-900">
                @if (session('message'))
                    <x-alert status="{{ session('status') }}" message="{{ session('message') }}" />
                @endif
                @yield('content')
            </div>
        </div>

    </div>

    @include('layouts.scripts')

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

                console.log('New complaint submitted master:', e.grievance, e.user);

                showAlert(e.grievance, e.user);
                console.log("show 123");
                showNotification(e.grievance, e.user);
            });

        function showAlert(grievance, user) {

            console.log("show");
            const grievanceNotification = `<div id="alertBox"
                        class=" 
                        h-96 bg-white border rounded-md shadow-md fixed top-1/2 -translate-y-1/2 inset-x-0 z-[99999] px-4 py-3 text-center mx-auto max-w-xl scale-100 transition-transform duration-300 ease-out
                        flex flex-col justify-center items-center
                        "
                        role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#000000" class="bi bi-bell m-4"
                            viewBox="0 0 16 16">
                            <path
                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                        </svg>

                        <h1 class="text-3xl font-bold text-gray-900">Ding Dong!</h1>
                        <p class="text-gray-600">A new grievance has been received. </p>

                        <span>Title: </span>
                        <span class="text-lg font-semibold text-gray-900">${grievance.title}</span>

                        <button class="primary-btn mt-4" onclick="window.location.href='/admin/grievance/${grievance.id}'">
                            View Grievance
                            </button>

                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-green-900" role="button" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" onclick="hideAlert()">
                                <title>Close</title>
                                <path
                                    d="M14.348 5.652a1 1 0 00-1.414 0L10 8.586 7.066 5.652a1 1 0 10-1.414 1.414L8.586 10 5.652 12.934a1 1 0 101.414 1.414L10 11.414l2.934 2.934a1 1 0 001.414-1.414L11.414 10l2.934-2.934a1 1 0 000-1.414z" />
                            </svg>
                        </span>
                    </div>`;

            document.getElementById('appBody').insertAdjacentHTML('afterbegin', grievanceNotification);
        }
    </script>
</body>

</html>
