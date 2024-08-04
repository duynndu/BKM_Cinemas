<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CashController;
use App\Http\Controllers\Api\ImageController;
use App\Http\Controllers\Api\MoMoController;
use App\Http\Controllers\Api\TodoController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refreshToken', 'refreshToken');
});

Route::controller(TodoController::class)->group(function () {
    Route::get('todos', [TodoController::class, 'index']);
    Route::post('todo', [TodoController::class, 'store']);
    Route::get('todo/{id}', [TodoController::class, 'show']);
    Route::put('todo/{id}', [TodoController::class, 'update']);
    Route::delete('todo/{id}', [TodoController::class, 'destroy']);
});


Route::post('momo/create-payment', [MoMoController::class, 'createPayment']);
Route::post('momo/momo-ipn', [MoMoController::class, 'momoIpn']);

Route::post('cash/create-payment', [CashController::class, 'createPayment']);


Route::post('delete-image-by-url', [ImageController::class, 'deleteImageByUrl']);
Route::post('images', [ImageController::class, 'store']);
