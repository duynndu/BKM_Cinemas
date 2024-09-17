<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SeatController;
use App\Http\Controllers\Api\SeatLayoutController;

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refreshToken', 'refreshToken');
});

Route::resource('seats', SeatController::class);
Route::resource('seat-layouts', SeatLayoutController::class);