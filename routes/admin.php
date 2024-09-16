<?php

use App\Http\Controllers\SeatLayoutController;
use App\Models\SeatLayout;
use Illuminate\Support\Facades\Route;

Route::prefix('admin/')->group(function () {
    Route::get('/', function () {
        return view('admin.pages.dashboard');
    })->name('admin.dashboard');
    Route::prefix('room-manager')->group(function () {
        Route::get('rooms', function () {
            return view('admin.pages.room-manager.room.index');
        })->name('rooms.index');

        Route::get('rooms/create', function () {
            return view('admin.pages.room-manager.room.create');
        })->name('rooms.create');

        Route::prefix('seat-layouts')
            ->controller(SeatLayoutController::class)
            ->name('seat-layouts.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/{id}/edit', 'edit')->name('edit');
                Route::post('/{id}/update', 'update')->name('update');
                Route::delete('/{id}/delete', 'delete')->name('delete');
            });
    });
});

Route::group(['prefix' => 'filemanager', 'middleware' => ['web']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
