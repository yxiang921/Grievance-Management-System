<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @include('layouts.head')
    @include('layouts.cdn')
</head>

<body class="bg-purple-100/20 font-sans">
    <div class="flex">
        <x-sidebar></x-sidebar>

        <!-- Main Content -->
        <div class="flex-1 p-4">
            <x-header></x-header>
            <div class="w-full mt-4 text-gray-900">
                @yield('content')
            </div>
        </div>

    </div>

    @include('layouts.scripts')
</body>

</html>
