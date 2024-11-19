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

//homepage
Route::get('/', function () {
    return view('landing.index'); // or landing.index if renamed
});



Route::get('/faq', [LandingController::class, 'faq'])->name('faq');



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


// require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/department.php';
require __DIR__ . '/custom_auth.php';