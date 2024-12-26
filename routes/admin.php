<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AnalyticsController;
use App\Http\Controllers\Admin\GrievanceController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MapController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['admin.auth']

], function () {

    Route::get('/home', [HomeController::class, 'index'])
        ->name('home');

    // Grievances 
    Route::get('/grievances', [GrievanceController::class, 'getAllGrievances'])
        ->name('grievances');

    Route::get('/grievance/{grievance_id}', [GrievanceController::class, 'getGrievance'])
        ->name('grievance.detail');

    Route::post('/grievance/assign', [GrievanceController::class, 'assignGrievance'])
        ->name('grievance.assign');

    Route::get('/grievance/close/{grievance_id}', [GrievanceController::class, 'closeGrievance'])
        ->name('grievance.close');

    Route::post('/grievance/search', [GrievanceController::class, 'searchGrievance'])
        ->name('grievance.search');


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

    Route::post('/department/search', [DepartmentController::class, 'searchDepartment'])
        ->name('department.search');

    Route::post('/department/staff/add', [DepartmentController::class, 'addStaff'])
        ->name('department.staff.add');



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

    Route::post('/user/search', [UserController::class, 'searchUser'])
        ->name('user.search');



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

    Route::post('/admin/search', [AdminController::class, 'searchAdmin'])
        ->name('admin.search');

    Route::get('/map', [MapController::class, 'index'])->name('map');



    Route::get('/analytics', [AnalyticsController::class, 'getAnalytics'])
        ->name('analytics');

    Route::get('/settings', [SettingController::class, 'index'])
        ->name('settings');

    Route::post('/setting/update', [SettingController::class, 'update'])
        ->name('setting.update');
});