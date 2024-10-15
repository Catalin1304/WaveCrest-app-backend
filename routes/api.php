<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\FuelLogController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cars', [CarController::class, 'index']);
Route::post('/cars', [CarController::class, 'store']);

Route::post('/cars/fuel-logs/{car}', [FuelLogController::class, 'store']);
Route::get('/cars/fuel-logs/{car}', [FuelLogController::class, 'index']);
