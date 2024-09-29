<?php

use App\Http\Controllers\Admin\GrievanceController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['auth']
], function () {

    Route::get('/home', function () {
        return view('admin.home');
    })->name('home');

    Route::get('/grievances', [GrievanceController::class, 'getAllGrievances'])
    ->name('grievances');

    Route::get('/departments', function () {
        return view('admin.departments');
    })->name('departments');

    Route::get('/map', function () {
        return view('admin.map');
    })->name('map');

    Route::get('/analytics', function () {
        return view('admin.analytics');
    })->name('analytics');

    Route::get('/users', function () {
        return view('admin.users');
    })->name('users');

    Route::get('/admins', function () {
        return view('admin.admins');
    })->name('admins');

    Route::get('/settings', function () {
        return view('admin.settings');
    })->name('settings');
});

Route::get('grievance/1', function () {
    return view('admin.grievanceDetail');
})->name('admin.grievance.detail');

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