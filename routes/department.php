<?php

use App\Http\Controllers\Department\DepartmentController;
use App\Http\Controllers\Department\AnalyticsController;
use App\Http\Controllers\Department\GrievanceController;
use App\Http\Controllers\Department\HomeController;
use App\Http\Controllers\Department\UserController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'department',
    'as' => 'department.',
    'middleware' => ['department.auth']

], function () {

    Route::get('/home', [HomeController::class, 'index'])
        ->name('home');

    // Grievances 
    Route::get('/grievances', [GrievanceController::class, 'getAllGrievances'])
        ->name('grievances');

    Route::get('/grievance/{grievance_id}', [GrievanceController::class, 'getGrievance'])
        ->name('grievance.detail');



    // Departments
    Route::get('/departments', [DepartmentController::class, 'getAllDepartment'])
        ->name('departments');

    Route::get('/addDepartment', function () {
        return view('admin.addDepartment');
    })->name('department.add');

    Route::get('/editDepartment/{department_id}', [DepartmentController::class, 'editDepartment'])
        ->name('department.edit');

    Route::post('/department/create', [DepartmentController::class, 'createDepartment'])
        ->name('department.create');

    Route::post('/department/update', [DepartmentController::class, 'updateDepartment'])
        ->name('department.update');

    Route::get('/deleteDepartment/{department_id}', [DepartmentController::class, 'deleteDepartment'])
        ->name('department.delete');



    // Users
    Route::get('/users', [UserController::class, 'index'])
        ->name('users');

    Route::get('/addUser', function () {
        return view('admin.addUser');
    })->name('user.add');

    Route::get('/editUser/{user_id}', [UserController::class, 'editUser'])
        ->name('user.edit');

    Route::post('/user/update', [UserController::class, 'updateUser'])
        ->name('user.update');

    Route::post('/user/create', [UserController::class, 'createUser'])
        ->name('user.create');

    Route::get('/deleteUser/{user_id}', [UserController::class, 'deleteUser'])
        ->name('user.delete');



    // Admins
    Route::get('/admins', [AdminController::class, 'index'])
        ->name('admins');

    Route::get('/addAdmin', function () {
        return view('admin.addAdmin');
    })->name('admin.add');

    Route::get('/editAdmin/{admin_id}', [AdminController::class, 'editAdmin'])
        ->name('admin.edit');

    Route::post('/admin/update', [AdminController::class, 'updateAdmin'])
        ->name('admin.update');

    Route::post('/admin/create', [AdminController::class, 'createAdmin'])
        ->name('admin.create');

    Route::get('/deleteAdmin/{admin_id}', [AdminController::class, 'deleteAdmin'])
        ->name('admin.delete');



    Route::get('/analytics', [AnalyticsController::class, 'getAnalytics'])
        ->name('analytics');

    Route::get('/map', function () {
        return view('admin.map');
    })->name('map');

    Route::get('/settings', function () {
        return view('admin.settings');
    })->name('settings');
});