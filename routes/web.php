<?php

use App\Http\Controllers\ClaseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservaController;
use Illuminate\Support\Facades\Route;

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
    return view ('welcome');
});

Route::resource('clase', ClaseController::class)->name('index','clase');
Route::resource('user', UserController::class);
Route::resource('reserva', ReservaController::class)->name('index','reserva');


