<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-white h-screen shadow-md">
            <div class="p-4">
                <img src="/path-to-profile-pic.jpg" alt="Profile Pic" class="rounded-full w-16 h-16 mb-4">
                <p class="text-lg font-semibold">Admin</p>
                <p class="text-gray-500">admin@gmail.com</p>
            </div>
            <nav class="mt-6">
                <a href="#" class="flex items-center py-2 px-4 text-gray-700 bg-green-100 rounded-lg mb-2">
                    <svg class="w-5 h-5 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path d="M3 7V4a1 1 0 012-0V1h10v3a1 1 0 012 0v3h1.76A1.24 1.24 0 0120 8.24v10.52A1.24 1.24 0 0118.76 20H1.24A1.24 1.24 0 010 18.76V8.24A1.24 1.24 0 011.24 7H3zm3 0V4h8v3H6zm5 10h2v-2h-2v2zm-4-4h6v-2H7v2z"/></svg>
                    Dashboard
                </a>
                <!-- Add other navigation links here -->
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1">
            @yield('content')
        </div>
    </div>
</body>
</html>
