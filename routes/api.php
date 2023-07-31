<?php

use App\Http\Controllers\Api\CrossFeederController;
use App\Http\Controllers\Api\DataController;
use App\Http\Controllers\Api\InterferenceController;
use App\Http\Controllers\Api\TMAController;
use App\Http\Controllers\Api\UsersController;
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

Route::get('/data', [DataController::class, 'index']);
Route::get('/interference', [InterferenceController::class, 'index']);
Route::get('/users', [UsersController::class, 'index']);
Route::get('/cross', [CrossFeederController::class, 'index']);
Route::get('/tma', [TMAController::class, 'index']);
Route::get('/interference/{site_id}', [InterferenceController::class, 'show']);
Route::get('/users/{site_id}', [UsersController::class, 'show']);
Route::get('/tma/{site_id}', [TMAController::class, 'show']);
Route::get('/cross/{site_id}', [CrossFeederController::class, 'show']);
