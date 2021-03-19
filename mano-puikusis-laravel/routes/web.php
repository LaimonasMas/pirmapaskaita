<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GardenController;

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
    return view('welcome');
});

Route::get('kelias-i-lara', function () {
    return 'Labas Lara';
});

Route::get('kelias-i-lara2', function () {
    return 'Vel Lara';
});

Route::get('gates/{vaisius}/{id}', [GardenController::class, 'index']);