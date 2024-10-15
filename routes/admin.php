<?php

use App\Http\Controllers\Admin\Blocks\BlockController;
use App\Http\Controllers\Admin\Blocks\BlockTypeController;
use App\Http\Controllers\Admin\CategoryPostController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Foods\FoodTypeController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SystemController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\SeatLayoutController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SeatTypeController;

// Auth Admin
use App\Http\Controllers\Auth\Admin\LoginController;

// Namespace Error Admin
use App\Http\Controllers\Error\Admin\ErrorController;

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'filemanager', 'middleware' => ['web']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::prefix('error')
    ->controller(ErrorController::class)
    ->name('error.')
    ->group(function () {
        Route::get('/404', 'notFound')->name('notFound');
        Route::get('/authorize-error', 'authorizeError')->name('authorize-error');
    });

Route::prefix('admin')->middleware(['web'])
    ->name('admin.')
    ->group(function () {

        Route::get('/login', [LoginController::class, 'login'])
            ->name('login')
            ->middleware('checkLogin');

        Route::post('/loginSubmit', [LoginController::class, 'loginSubmit'])
            ->name('loginSubmit')
            ->middleware('checkLogin');

        Route::post('/logout', [LoginController::class, 'logout'])
            ->name('logout');

        Route::middleware('admin')->group(function () {
            Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

            Route::prefix('room-manager')->group(function () {
                Route::prefix('rooms')
                    ->controller(RoomController::class)
                    ->name('rooms.')->group(function () {
                        Route::get('/', 'index')->name('index');
                        Route::get('/create', 'create')->name('create');
                        Route::post('/store', 'store')->name('store');
                        Route::get('/{room}/edit', 'edit')->name('edit');
                        Route::post('/{room}/update', 'update')->name('update');
                        Route::delete('/{room}', 'destroy')->name('destroy');
                    });

                Route::prefix('seat-layouts')
                    ->controller(SeatLayoutController::class)
                    ->name('seat-layouts.')->group(function () {
                        Route::get('/', 'index')->name('index');
                        Route::get('/create', 'create')->name('create');
                        Route::post('/store', 'store')->name('store');
                        Route::get('/{seatLayout}/edit', 'edit')->name('edit');
                        Route::post('/{seatLayout}/update', 'update')->name('update');
                        Route::delete('{seatLayout}', 'destroy')->name('destroy');
                    });

                Route::prefix('seat-types')
                    ->controller(SeatTypeController::class)
                    ->name('seat-types.')->group(function () {
                        Route::get('/', 'index')->name('index');
                        Route::get('/create', 'create')->name('create');
                        Route::post('/store', 'store')->name('store');
                        Route::get('/{seatType}/edit', 'edit')->name('edit');
                        Route::post('/{seatType}/update', 'update')->name('update');
                        Route::delete('{seatType}', 'destroy')->name('destroy');
                    });
            });

            Route::prefix('foods')
                ->controller(SystemController::class)
                ->name('foods.')->group(function () {
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
            Route::prefix('food-types')
                ->controller(FoodTypeController::class)
                ->name('food-types.')->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('/create', 'create')->name('create');
                    Route::post('/store', 'store')->name('store');
                    Route::get('/{id}/edit', 'edit')->name('edit');
                    Route::post('/{id}/update', 'update')->name('update');
                    Route::delete('/{id}/delete', 'delete')->name('delete');
                    Route::post('/change-order', 'changeOrder')->name('changeOrder');
                    Route::post('/change-active', 'changeActive')->name('changeActive');
                });
            Route::prefix('foods-combos')
                ->controller(SystemController::class)
                ->name('foods-combos.')->group(function () {
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
    });
