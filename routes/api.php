<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
use \App\Http\Controllers\RacesController;
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

Route::resource('driver', DriverController::class);
Route::resource('race', RacesController::class);
Route::get('/driver/search/{name}', [DriverController::class, 'search']);

//Route::get('/driver', [DriverController::class, 'index']);
//Route::post('/driver', [DriverController::class, 'store']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
