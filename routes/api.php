<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
use \App\Http\Controllers\RacesController;
use \App\Http\Controllers\SeasonController;
use Illuminate\Support\Facades\URL;

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
Route::get('/driver/{name}', [DriverController::class, 'search']);
Route::get('/driver', [DriverController::class, 'index']);
Route::post('/driver', [DriverController::class, 'store']);
Route::put('/driver/{id}', [DriverController::class, 'update']);
Route::delete('/driver/{id}', [DriverController::class, 'destroy']);

Route::get('/race', [RacesController::class, 'index']);
Route::post('/race', [RacesController::class, 'store']);
Route::put('/race/{id}', [RacesController::class, 'update']);
Route::delete('/race/{id}', [RacesController::class, 'destroy']);
Route::get('/race/{season}', [RacesController::class, 'GetSeasonRaces']);

Route::get('/', function() {
    return response()->json([
        'drivers' => URL::current() .  '/driver',
        'races' => URL::current() . '/race'
    ]);
});

//Route::get('/driver', [DriverController::class, 'index']);
//Route::post('/driver', [DriverController::class, 'store']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
