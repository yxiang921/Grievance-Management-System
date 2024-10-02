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
    })->name('addDepartment');

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

    // Admins
    Route::get('/admins', [AdminController::class, 'index'])
        ->name('admins');



    Route::get('/analytics', [AnalyticsController::class, 'getAnalytics'])
        ->name('analytics');

    Route::get('/map', function () {
        return view('admin.map');
    })->name('map');

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



Route::get('/editDepartment', function () {
    return view('admin.editDepartment');
})->name('admin.editDepartment');

Route::get('/addAdmin', function () {
    return view('admin.addAdmin');
})->name('admin.addAdmin');

Route::get('/editAdmin', function () {
    return view('admin.editAdmin');
})->name('admin.editAdmin');