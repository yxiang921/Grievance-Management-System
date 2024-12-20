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
    return view('landing.index');
});

Route::get('/faq', function () {
    return view('landing.faq');
});

Route::get('/tac', function () {
    return view('landing.tac');
});

Route::get('/booking', [LandingController::class, 'create'])
->name('landing.create');

Route::post('/booking', [LandingController::class, 'store'])
->name('landing.store');