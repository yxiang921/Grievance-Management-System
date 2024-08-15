<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        /* Custom transition for the sidebar */
        #sidebar {
            transition: transform 0.3s ease-in-out;
        }

        .translate-x-full {
            transform: translateX(-100%);
        }

        .translate-x-0 {
            transform: translateX(0%);
        }
    </style>
</head>

<body class="bg-gray-100 font-sans">
    <!-- Overlay for mobile -->
    <div class="z-10 hidden overlay w-screen h-screen bg-slate-900 opacity-45 fixed inset-0" onclick="toggleMenu()">
        <!-- This div acts as the backdrop when the sidebar is open on mobile -->
    </div>

    <div class="flex">
        <!-- Sidebar -->
        <div id="sidebar"
            class="z-20 w-5/6 md:w-64 bg-white min-h-screen shadow-md transform -translate-x-full md:translate-x-0 fixed md:static">
            <div class="p-4 relative">
                <img src="https://pics.craiyon.com/2023-07-02/9a4508b794e8480ab55e484905e31b23.webp" alt="Profile Pic"
                    class="rounded-full w-16 h-16 mb-4">
                <p class="text-lg font-semibold">Admin</p>
                <p class="text-gray-500">admin@gmail.com</p>

                <div class="cursor-pointer w-8 h-8 absolute top-4 right-4 md:hidden" onclick="toggleMenu()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                        stroke="currentColor" class="size-6">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
            </div>

            <nav class="mt-6">
                <a href="#" class="flex items-center py-2 px-4 text-gray-700 bg-green-100 rounded-lg mb-2">
                    <svg class="w-5 h-5 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 7V4a1 1 0 012-0V1h10v3a1 1 0 012 0v3h1.76A1.24 1.24 0 0120 8.24v10.52A1.24 1.24 0 0118.76 20H1.24A1.24 1.24 0 010 18.76V8.24A1.24 1.24 0 011.24 7H3zm3 0V4h8v3H6zm5 10h2v-2h-2v2zm-4-4h6v-2H7v2z" />
                    </svg>
                    Dashboard
                </a>
                <!-- Add other navigation links here -->
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1">
            <div class="px-6 py-2 flex justify-between items-center">
                <div>
                    <h2 class="text-2xl font-semibold">Dashboard</h2>
                    <p class="text-gray-600">Hello Admin, Welcome Back!</p>
                </div>
                <div class="w-8 h-8 flex cursor-pointer md:hidden" onclick="toggleMenu()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                        stroke="currentColor" class="size-6">
                        <path strokeLinecap="round" strokeLinejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </div>
            </div>

            @yield('content')
        </div>
    </div>

    <script>
        function toggleMenu() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.querySelector('.overlay');

            // Toggle sidebar's translation class
            sidebar.classList.toggle('-translate-x-full');
            sidebar.classList.toggle('translate-x-0');

            // Toggle the visibility of the overlay
            overlay.classList.toggle('hidden');
        }
    </script>
</body>

</html>
