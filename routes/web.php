<?php

use App\Models\Driver;
use \App\Models\Races;
use \App\Http\Controllers\RacesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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
    $d = Driver::all();
    return view('welcome', [
        'drivers' => $d
    ]);
});
