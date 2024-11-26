<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});



// require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/department.php';
require __DIR__ . '/landing.php'; 
require __DIR__ . '/custom_auth.php';