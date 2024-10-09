<?php

use App\Http\Controllers\Admin\auth\AdminRegisterController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\auth\AdminLoginController;
use App\Http\Controllers\Department\auth\DepartmentLoginController;

// Admin routes

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
], function () {

    Route::get('/', function () {
        return redirect()->route('admin.login.form');
    });

    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('login');
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');

    Route::get('/register', [AdminRegisterController::class, 'showRegisterForm'])->name('register.form');
    Route::post('/register', [AdminRegisterController::class, 'register'])->name('register');
});


// Department routes
Route::group([
    'prefix' => 'department',
    'as' => 'department.',
], function () {

    Route::get('/login', [DepartmentLoginController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [DepartmentLoginController::class, 'login'])->name('login');
    Route::post('/logout', [DepartmentLoginController::class, 'logout'])->name('logout');

    Route::get('/register', [DepartmentLoginController::class, 'showRegisterForm'])->name('register.form');
});
