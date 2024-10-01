<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AnalyticsController;
use App\Http\Controllers\Admin\GrievanceController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['auth']
], function () {

    Route::get('/home', [HomeController::class, 'index'])
        ->name('home');

    Route::get('/grievances', [GrievanceController::class, 'getAllGrievances'])
        ->name('grievances');

    Route::get('/grievance/{grievance_id}', [GrievanceController::class, 'getGrievance'])
        ->name('grievance.detail');

    Route::get('/departments', [DepartmentController::class, 'getAllDepartment'])
        ->name('departments');

    Route::get('/analytics', [AnalyticsController::class, 'getAnalytics'])
        ->name('analytics');

    Route::get('/map', function () {
        return view('admin.map');
    })->name('map');

    Route::get('/users', [UserController::class, 'index'])
        ->name('users');

    Route::get('/admins', [AdminController::class, 'index'])
        ->name('admins');

    Route::get('/settings', function () {
        return view('admin.settings');
    })->name('settings');
});



Route::get('/addUser', function () {
    action:
    return view('admin.addUser');
})->name('admin.addUser');

Route::get('/editUser', function () {
    return view('admin.editUser');
})->name('admin.editUser');

Route::get('/addNewDepartment', function () {
    return view('admin.addNewDepartment');
})->name('admin.addDepartment');

Route::get('/editDepartment', function () {
    return view('admin.editDepartment');
})->name('admin.editDepartment');

Route::get('/addAdmin', function () {
    return view('admin.addAdmin');
})->name('admin.addAdmin');

Route::get('/editAdmin', function () {
    return view('admin.editAdmin');
})->name('admin.editAdmin');