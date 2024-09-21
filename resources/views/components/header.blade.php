<?php
$routeNames = [
    'admin.home' => 'Dashboard',
    'admin.grievances' => 'Grievances',
    'admin.departments' => 'Departments',
    'admin.analytics' => 'Analytics',
    'admin.map' => 'Map',
    'admin.users' => 'Users',
    'admin.admins' => 'Admins',
    'admin.settings' => 'Settings',

    'admin.grievance.detail' => 'Grievance Detail',
];
?>

<div
    class="bg-white/20 w-full rounded-lg m-auto text-gray-900 border border-gray-100 flex justify-between items-center pl-4 px-2 h-16 sticky top-4 left-0 z-[50] backdrop-blur-lg">
    <div>
        <h2 class="text-xl font-semibold ">
            {{ $routeNames[Route::current()->getName()] ?? 'Unknown Route' }}
        </h2>
        <p>Hello Admin, Welcome Back!</p>
    </div>
    <div class="flex flex-row items-center h-full">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="size-6 m-2 text-gray-900 cursor-pointer">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
        </svg>
        <div class="pr-4 flex cursor-pointer md:hidden" onclick="toggleMenu()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                stroke="currentColor" class="size-6 text-gray-900">
                <path strokeLinecap="round" strokeLinejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </div>
    </div>
</div>
