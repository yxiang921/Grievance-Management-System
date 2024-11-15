<?php

use App\Http\Controllers\API\AuthApiController;
use App\Http\Controllers\API\GrievanceApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(
    [
        // prefix: http://..../api/auth
        'prefix' => 'auth',
        'as' => 'api.',
    ],
    function () {

        Route::post('/register', [AuthApiController::class, 'register'])
            ->name('auth.register');

        Route::post('/login', [AuthApiController::class, 'login'])
            ->name('auth.login');

        Route::get('/showProfile', [AuthApiController::class, 'showProfile'])
            ->name('auth.showProfile')
            ->middleware('auth:api');
    }
);

Route::group(
    [
        'prefix' => 'grievance',
        'as' => 'api.',
    ], function (){
        Route::post('/addGrievance',[GrievanceApiController::class, 'showProfile'])
            ->name('grievance.addGrievance');

        Route::get('/showGrievance',[GrievanceApiController::class, 'showGrievance'])
            ->name('grievance.showGrievance');

        Route::get('/showGrievanceDetails/{id}',[GrievanceApiController::class, 'showGrievanceDetails'])
            ->name('grievance.showGrievanceDetails');
    }
);
