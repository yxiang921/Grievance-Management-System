<?php
$routeNames = [
    'admin.home' => 'Dashboard',
    'admin.grievances' => 'Grievances',
    'admin.departments' => 'Departments',
    'admin.analytics' => 'Analytics',
    'admin.users' => 'Users',
    'admin.admins' => 'Admins',
    'admin.settings' => 'Settings',

    'admin.grievance.detail' => 'Grievance Detail',
];
?>

<div class="px-6 py-2 flex justify-between items-center">
    <div>
        <h2 class="text-2xl font-semibold">
            {{ $routeNames[Route::current()->getName()] ?? 'Unknown Route' }}
        </h2>
        <p class="text-gray-600">Hello Admin, Welcome Back!</p>
    </div>
    <div class="w-8 h-8 flex cursor-pointer md:hidden" onclick="toggleMenu()">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor"
            class="size-6">
            <path strokeLinecap="round" strokeLinejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
    </div>
</div>
