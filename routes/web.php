<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin/home');
})->name('admin.home');

Route::get('/grievances', function () {
    return view('admin/grievances');
})->name('admin.grievances');

Route::get('/departments', function(){
    return view('admin/departments');
})->name('admin.departments');

Route::get('/map', function(){
    return view('admin/map');
})->name('admin.map');

Route::get('/analytics', function(){
    return view('admin/analytics');
})->name('admin.analytics');

Route::get('/users', function(){
    return view('admin/users');
})->name('admin.users');

Route::get('/admins', function(){
    return view('admin/admins');
})->name('admin.admins');

Route::get('/settings', function(){
    return view('admin/settings');
})->name('admin.settings');

Route::get('grievance/1', function(){
    return view('admin/grievanceDetail');
})->name('admin.grievance.detail');

Route::get('/addNewDepartment', function(){
    return view('admin/addNewDepartment');
})->name('admin.addNewDepartment');

Route::get('/editDepartment', function(){
    return view('admin/editDepartment');
})->name('admin.editDepartment');