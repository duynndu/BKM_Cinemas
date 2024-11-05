<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\SeatController;
use App\Http\Controllers\Api\SeatLayoutController;
// use App\Http\Controllers\Api\RoomController;
use App\Http\Controllers\Api\SeatTypeController;
Route::name('api.')->group(function () {
    // Route::controller(AuthController::class)->group(function () {
    //     Route::post('login', 'login');
    //     Route::post('register', 'register');
    //     Route::post('logout', 'logout');
    //     Route::post('refreshToken', 'refreshToken');
    // });

    Route::resource('seats', SeatController::class);
    Route::resource('seat-layouts', SeatLayoutController::class);
    Route::resource('seat-types', SeatTypeController::class);
    Route::get('seat-types-key-by-code', [SeatTypeController::class, 'getSeatTypesKeyByCode']);
    // Route::controller(RoomController::class)->group(function () {
    //     Route::get('rooms', 'index');
    //     Route::get('rooms/{room}', 'show');
    //     Route::post('rooms', 'store');
    //     Route::put('rooms/{room}', 'update');
    //     Route::delete('rooms/{room}', 'destroy');
    // });
});
