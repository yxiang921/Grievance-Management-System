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

        .nav-link.active::before{
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 4px;
            height: 100%;
            background-color: #10B981;
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

            <nav class="mt-6 w-full flex flex-col items-center justify-center">
                {{-- Each Links --}}
                <div class="nav-link active w-full h-12 flex justify-center relative my-2">
                    <a href="#" class="w-5/6 h-12 font-semibold text-green-900 flex items-center py-2 px-4 bg-green-100 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                          </svg>
                        <span class="pl-4">Dashboard</span>
                    </a>
                </div>

                <div class="nav-link w-full h-12 flex justify-center relative my-2">
                    <a href="#" class="w-5/6 h-12 font-semibold flex items-center py-2 px-4 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                          </svg>
                        <span class="pl-4">Dashboard</span>
                    </a>
                </div>
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
