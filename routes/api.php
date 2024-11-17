<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CinemaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RoomController;
use App\Http\Controllers\Api\FoodController;
use App\Http\Controllers\Api\FoodTypeController;
use App\Http\Controllers\Api\MovieController;
use App\Http\Controllers\Api\SeatController;
use App\Http\Controllers\Api\SeatLayoutController;
use App\Http\Controllers\Api\SeatTypeController;
use App\Http\Controllers\Api\ShowtimeController;
use App\Models\Cinema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        Route::get('{showtime}/detail', 'getShowtimeDetailById');
        Route::get('', 'index');
        Route::get('{showtime}', 'show');
        Route::post('{showtime}/book-seat', 'bookSeat');
        Route::post('', 'store');
        Route::put('{showtime}', 'update');
        Route::put('{showtime}/clear-movie', 'clearShowtimeMovie');
        Route::put('{showtime}/update-movie', 'updateShowtimeMovie');
        Route::delete('{showtime}', 'destroy');
    });
    Route::controller(FoodController::class)->prefix('foods')->name('foods.')->group(function () {
        Route::get('', 'index');
        Route::get('{food}', 'show');
        Route::post('', 'store');
        Route::put('{food}', 'update');
        Route::delete('{showtime}', 'destroy');
    });
    Route::controller(FoodTypeController::class)->prefix('food-types')->name('food-types.')->group(function () {
        Route::get('', 'index');
        Route::get('{food-type}', 'show');
        Route::post('', 'store');
        Route::put('{food-type}', 'update');
        Route::delete('{food-type}', 'destroy');
    });
    Route::controller(MovieController::class)->prefix('movies')->name('movies.')->group(function () {
        Route::get('', 'index');
        Route::get('{movie}', 'show');
        Route::post('', 'store');
        Route::put('{movie}', 'update');
        Route::delete('{movie}', 'destroy');
    });
    Route::controller(AuthController::class)->prefix('users')->name('users.')->group(function () {
        Route::get('getCurrentUser', 'getCurrentUser');
    });
    Route::controller(CinemaController::class)->prefix('cinemas')->name('cinemas.')->group(function () {
        Route::get('', 'index');
    });
});
