<?php
$routeNames = [
    'admin.home' => 'Dashboard',

    // Grievances Management
    'admin.grievances' => 'Grievances',
    'admin.grievance.detail' => 'Grievance Detail',
    'admin.grievance.assign' => 'Grievance Assignment',
    'admin.grievance.close' => 'Grievance Closure',
    'admin.grievance.search' => 'Grievance Search',

    // Department Management
    'admin.departments' => 'Department Management',
    'admin.department.add' => 'Add Department',
    'admin.department.edit' => 'Edit Department',
    'admin.department.create' => 'Create Department',
    'admin.department.update' => 'Update Department',
    'admin.department.delete' => 'Delete Department',
    'admin.department.search' => 'Search Department',

    // Admins Management
    'admin.admins' => 'Admin Management',
    'admin.admin.add' => 'Add Admin',
    'admin.admin.edit' => 'Edit Admin',
    'admin.admin.update' => 'Update Admin',
    'admin.admin.create' => 'Create Admin',
    'admin.admin.delete' => 'Delete Admin',
    'admin.admin.search' => 'Search Admin',

    // Users Management
    'admin.users' => 'User Management',
    'admin.user.add' => 'Add User',
    'admin.user.edit' => 'Edit User',
    'admin.user.update' => 'Update User',
    'admin.user.create' => 'Create User',
    'admin.user.delete' => 'Delete User',
    'admin.user.search' => 'Search User',

    'admin.analytics' => 'Analytics',
    'admin.map' => 'Map',
    'admin.settings' => 'Settings',

    'admin.grievance.detail' => 'Grievance Detail',

    'department.home' => 'Dashboard',
    'department.grievances' => 'Grievances',
    'department.grievance.detail' => 'Grievance Detail',
    'department.grievance.assign' => 'Grievance Assignment',
    'department.grievance.close' => 'Grievance Closure',
    'department.grievance.search' => 'Grievance Search',

    'department.analytics' => 'Analytics',
    'department.map' => 'Map',
];
?>

<div
    class="bg-white/20 w-full rounded-lg m-auto text-gray-900 border border-gray-100 flex justify-between items-center pl-4 px-2 h-16 sticky top-4 left-0 z-[999] backdrop-blur-lg">
    <div>
        <h2 class="text-xl font-semibold ">
            {{ $routeNames[Route::current()->getName()] ?? 'Unknown Route' }}
        </h2>
        <p>Hello 
            @if (Auth::guard('admin')->check())
                Admin
            @else
                Staff
            @endif
            , Welcome Back!</p>
    </div>
    <div class="flex flex-row items-center h-full">

        <div class="pr-4 flex cursor-pointer md:hidden" onclick="toggleMenu()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                stroke="currentColor" class="size-6 text-gray-900">
                <path strokeLinecap="round" strokeLinejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </div>
    </div>
</div>

<x-notification />


