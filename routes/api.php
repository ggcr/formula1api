<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
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

Route::get('/driver', [DriverController::class, 'index']);

//Route::post('/driver', function() {
//    return Driver::create([
//        'name' => 'Max Verstappen',
//        'nationality' => 'NLD',
//        'number' => 33,
//        'number_url' => 'http:/google.com',
//        'image_url' => 'http:/google.com'
//    ]);
//});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
