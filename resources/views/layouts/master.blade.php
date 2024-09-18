<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @include('layouts.head')
</head>

<body class="bg-purple-100 font-sans">
    <div class="flex">
        <x-sidebar></x-sidebar>

        <!-- Main Content -->
        <div class="flex-1">
            <x-header></x-header>
            @yield('content')
        </div>

    </div>

    @include('layouts.scripts')
</body>

</html>
