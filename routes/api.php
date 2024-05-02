<?php

use App\Http\Controllers\ConcessionariaController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('login', [LoginController::class, 'login']);

Route::controller(ConcessionariaController::class)->group(function() {
    Route::get('/concessionarias', 'index');
    Route::get('/concessionarias/{id}', 'show');
    Route::post('/concessionarias', 'store');
    Route::put('/concessionarias/{id}', 'update');
    Route::delete('/concessionarias/{id}', 'delete');
});
