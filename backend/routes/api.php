<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//client
use App\Http\Controllers\Api\Client\AuthController;

//admin
use App\Http\Controllers\Api\Admin\HotelUtilityController;



Route::prefix('auth')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:api');
    Route::post('refresh', [AuthController::class, 'refresh'])->middleware('auth:api');
});

Route::prefix('admin')->middleware(['auth:api', 'isAdmin'])->group(function () {
    Route::apiResource('utilities', HotelUtilityController::class);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
