<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\GrievanceController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(
    [
        // prefix: http://..../api/grievance
        'prefix' => 'grievance',
        'as' => 'api.',
    ],
    function () {

        Route::get('/view', [GrievanceController::class, 'getGrievances'])
            ->name('grievance.view');

        Route::post('/add', [GrievanceController::class, 'createGrievance'])
            ->name('grievance.add');
    }
);
