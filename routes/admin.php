<?php

use App\Http\Controllers\Admin\Blocks\BlockController;
use App\Http\Controllers\Admin\Blocks\BlockTypeController;
use App\Http\Controllers\Admin\CategoryPostController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SystemController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\SeatLayoutController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'filemanager', 'middleware' => ['web']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


Route::prefix('admin')->middleware(['web'])
    ->name('admin.')
    ->group(function () {

        Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

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
                    Route::delete('{id}', 'destroy')->name('destroy');
                });
        });

        Route::prefix('systems')
            ->controller(SystemController::class)
            ->name('systems.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/{id}/edit', 'edit')->name('edit');
                Route::post('/{id}/update', 'update')->name('update');
                Route::delete('/{id}/delete', 'delete')->name('delete');
                Route::post('/change-order', 'changeOrder')->name('changeOrder');
                Route::post('/change-active', 'changeActive')->name('changeActive');
                Route::post('/removeAvatarImage', 'removeAvatarImage')->name('removeAvatarImage');
            });


        Route::prefix('menus')
            ->controller(MenuController::class)
            ->name('menus.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/{id}/edit', 'edit')->name('edit');
                Route::post('/{id}/update', 'update')->name('update');
                Route::get('/delete', 'delete')->name('delete');
                Route::post('/change-order', 'changeOrder')->name('changeOrder');
                Route::post('/change-active', 'changeActive')->name('changeActive');
            });


        Route::prefix('pages')
            ->controller(PageController::class)
            ->name('pages.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/{id}/edit', 'edit')->name('edit');
                Route::post('/{id}/update', 'update')->name('update');
                Route::delete('/{id}/delete', 'delete')->name('delete');
                Route::post('/change-order', 'changeOrder')->name('changeOrder');
                Route::post('/change-active', 'changeActive')->name('changeActive');
            });


        Route::prefix('blocks')
            ->controller(BlockController::class)
            ->name('blocks.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/{id}/edit', 'edit')->name('edit');
                Route::post('/{id}/update', 'update')->name('update');
                Route::delete('/{id}/delete', 'delete')->name('delete');
                Route::post('/change-order', 'changeOrder')->name('changeOrder');
                Route::post('/change-active', 'changeActive')->name('changeActive');
            });


        Route::prefix('blockTypes')
            ->controller(BlockTypeController::class)
            ->name('blockTypes.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/{id}/edit', 'edit')->name('edit');
                Route::post('/{id}/update', 'update')->name('update');
                Route::delete('/{id}/delete', 'delete')->name('delete');
                Route::post('/change-order', 'changeOrder')->name('changeOrder');
                Route::post('/change-active', 'changeActive')->name('changeActive');
            });


        Route::prefix('posts')
            ->controller(PostController::class)
            ->name('posts.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/{id}/edit', 'edit')->name('edit');
                Route::post('/{id}/update', 'update')->name('update');
                Route::delete('/{id}/delete', 'delete')->name('delete');
                Route::post('/change-order', 'changeOrder')->name('changeOrder');
                Route::post('/change-hot', 'changeHot')->name('changeHot');
                Route::post('/change-active', 'changeActive')->name('changeActive');
                Route::delete('/destroyImage/{id}', 'destroyImage')->name('destroyImage');
                Route::post('/removeAvatarImage', 'removeAvatarImage')->name('removeAvatarImage');
            });

        Route::prefix('categoryPosts')
            ->controller(CategoryPostController::class)
            ->name('categoryPosts.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/{id}/edit', 'edit')->name('edit');
                Route::post('/{id}/update', 'update')->name('update');
                Route::delete('/{id}/delete', 'delete')->name('delete');
                Route::post('/change-order', 'changeOrder')->name('changeOrder');
                Route::post('/change-hot', 'changeHot')->name('changeHot');
                Route::post('/change-active', 'changeActive')->name('changeActive');
                Route::post('/change-position', 'changePosition')->name('changePosition');
                Route::post('/removeAvatarImage', 'removeAvatarImage')->name('removeAvatarImage');
            });

        Route::prefix('tags')
            ->controller(TagController::class)
            ->name('tags.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/{id}/edit', 'edit')->name('edit');
                Route::post('/{id}/update', 'update')->name('update');
                Route::delete('/{id}/delete', 'delete')->name('delete');
                Route::post('/change-order', 'changeOrder')->name('changeOrder');
                Route::post('/change-active', 'changeActive')->name('changeActive');
            });
    });
