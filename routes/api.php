<?php

use App\Http\Controllers\Admin\RoomController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MovieController;
use App\Http\Controllers\Api\SeatController;
use App\Http\Controllers\Api\SeatLayoutController;
use App\Http\Controllers\Api\SeatTypeController;
use App\Http\Controllers\Api\ShowtimeController;

Route::name('api.')->group(function () {
    Route::resource('seats', SeatController::class);
    Route::resource('seat-layouts', SeatLayoutController::class);
    Route::resource('seat-types', SeatTypeController::class);
    Route::get('seat-types-key-by-code', [SeatTypeController::class, 'getSeatTypesKeyByCode']);
    Route::controller(RoomController::class)->prefix('rooms')->name('rooms.')->group(function () {
        Route::get('', 'index');
        Route::get('{room}', 'show');
        Route::post('', 'store');
        Route::put('{room}', 'update');
        Route::delete('{room}', 'destroy');
    });
    Route::controller(ShowtimeController::class)->prefix('showtimes')->name('showtimes.')->group(function () {
        Route::get('getShowtimesByDayAndRoomId', 'getShowtimesByDayAndRoomId');

        Route::get('', 'index');
        Route::get('{showtime}', 'show');
        Route::post('', 'store');
        Route::put('{showtime}', 'update');
        Route::put('{showtime}/clear-movie', 'clearShowtimeMovie');
        Route::put('{showtime}/update-movie', 'updateShowtimeMovie');

        Route::delete('{showtime}', 'destroy');
    });
    Route::controller(MovieController::class)->prefix('movies')->name('movies.')->group(function () {
        Route::get('', 'index');
        Route::get('{movie}', 'show');
        Route::post('', 'store');
        Route::put('{movie}', 'update');
        Route::delete('{movie}', 'destroy');
    });
});
