<?php

use App\Http\Controllers\Admin\ActorController;
use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\Admin\Blocks\BlockController;
use App\Http\Controllers\Admin\Blocks\BlockTypeController;
use App\Http\Controllers\Admin\CategoryPostController;
use App\Http\Controllers\Admin\CinemaController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\Foods\FoodComboController;
use App\Http\Controllers\Admin\Foods\FoodController;
use App\Http\Controllers\Admin\Foods\FoodTypeController;
use App\Http\Controllers\Admin\Members\ModuleController;
use App\Http\Controllers\Admin\Members\PermissionController;
use App\Http\Controllers\Admin\Members\RoleController;
use App\Http\Controllers\Admin\Members\UserController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\SeatLayoutController;
use App\Http\Controllers\Admin\SeatTypeController;
use App\Http\Controllers\Admin\SystemController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Auth\Admin\LoginController;
use App\Http\Controllers\Error\Admin\ErrorController;
use Illuminate\Support\Facades\Route;

// Auth Admin

// Namespace Error Admin


Route::group(['prefix' => 'file-manager', 'middleware' => ['web', 'admin']], function () {
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
            Route::get('/', [DashboardController::class, 'dashboard'])
                ->name('dashboard')
                ->middleware('authorizeAction:viewAny,Dashboard');

            Route::prefix('systems')
                ->controller(SystemController::class)
                ->name('systems.')->group(function () {
                    Route::get('/', 'index')
                        ->name('index')
                        ->middleware('authorizeAction:viewAny,App\Models\System');

                    Route::get('/create', 'create')
                        ->name('create')
                        ->middleware('authorizeAction:create,App\Models\System');

                    Route::post('/store', 'store')
                        ->name('store')
                        ->middleware('authorizeAction:create,App\Models\System');

                    Route::get('/{id}/edit', 'edit')
                        ->name('edit')
                        ->middleware('authorizeAction:update,App\Models\System');

                    Route::post('/{id}/update', 'update')
                        ->name('update')
                        ->middleware('authorizeAction:update,App\Models\System');

                    Route::delete('/{id}/delete', 'delete')
                        ->name('delete')
                        ->middleware('authorizeAction:delete,App\Models\System');

                    Route::post('/change-order', 'changeOrder')
                        ->name('changeOrder')
                        ->middleware('authorizeAction:changeOrder,App\Models\System');

                    Route::post('/change-active', 'changeActive')
                        ->name('changeActive')
                        ->middleware('authorizeAction:changeActive,App\Models\System');

                    Route::post('/removeAvatarImage', 'removeAvatarImage')
                        ->name('removeAvatarImage');

                    Route::post('/delete-item-multiple-checked', 'deleteItemMultipleChecked')
                        ->name('deleteItemMultipleChecked')
                        ->middleware('authorizeAction:deleteMultiple,App\Models\System');
                });

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

            Route::prefix('menus')
                ->controller(MenuController::class)
                ->name('menus.')->group(function () {
                    Route::get('/', 'index')
                        ->name('index')
                        ->middleware('authorizeAction:viewAny,App\Models\Menu');

                    Route::get('/create', 'create')
                        ->name('create')
                        ->middleware('authorizeAction:create,App\Models\Menu');

                    Route::post('/store', 'store')
                        ->name('store')
                        ->middleware('authorizeAction:create,App\Models\Menu');

                    Route::get('/delete', 'delete')
                        ->name('delete')
                        ->middleware('authorizeAction:delete,App\Models\Menu');
                });

            Route::prefix('pages')
                ->controller(PageController::class)
                ->name('pages.')->group(function () {
                    Route::get('/', 'index')
                        ->name('index')
                        ->middleware('authorizeAction:viewAny,App\Models\Page');

                    Route::get('/create', 'create')
                        ->name('create')
                        ->middleware('authorizeAction:create,App\Models\Page');

                    Route::post('/store', 'store')
                        ->name('store')
                        ->middleware('authorizeAction:create,App\Models\Page');

                    Route::get('/{id}/edit', 'edit')
                        ->name('edit')
                        ->middleware('authorizeAction:update,App\Models\Page');

                    Route::post('/{id}/update', 'update')
                        ->name('update')
                        ->middleware('authorizeAction:update,App\Models\Page');

                    Route::delete('/{id}/delete', 'delete')
                        ->name('delete')
                        ->middleware('authorizeAction:delete,App\Models\Page');

                    Route::post('/delete-item-multiple-checked', 'deleteItemMultipleChecked')
                        ->name('deleteItemMultipleChecked')
                        ->middleware('authorizeAction:deleteMultiple,App\Models\Page');
                });

            Route::prefix('blocks')
                ->controller(BlockController::class)
                ->name('blocks.')->group(function () {
                    Route::get('/', 'index')
                        ->name('index')
                        ->middleware('authorizeAction:viewAny,App\Models\Block');

                    Route::get('/create', 'create')
                        ->name('create')
                        ->middleware('authorizeAction:create,App\Models\Block');

                    Route::post('/store', 'store')
                        ->name('store')
                        ->middleware('authorizeAction:create,App\Models\Block');

                    Route::get('/{id}/edit', 'edit')
                        ->name('edit')
                        ->middleware('authorizeAction:update,App\Models\Block');

                    Route::post('/{id}/update', 'update')
                        ->name('update')
                        ->middleware('authorizeAction:update,App\Models\Block');

                    Route::delete('/{id}/delete', 'delete')
                        ->name('delete')
                        ->middleware('authorizeAction:delete,App\Models\Block');

                    Route::post('/delete-item-multiple-checked', 'deleteItemMultipleChecked')
                        ->name('deleteItemMultipleChecked')
                        ->middleware('authorizeAction:deleteMultiple,App\Models\Block');
                });

            Route::prefix('blockTypes')
                ->controller(BlockTypeController::class)
                ->name('blockTypes.')->group(function () {
                    Route::get('/', 'index')
                        ->name('index')
                        ->middleware('authorizeAction:viewAny,App\Models\BlockType');

                    Route::get('/create', 'create')
                        ->name('create')
                        ->middleware('authorizeAction:create,App\Models\BlockType');

                    Route::post('/store', 'store')
                        ->name('store')
                        ->middleware('authorizeAction:create,App\Models\BlockType');

                    Route::get('/{id}/edit', 'edit')
                        ->name('edit')
                        ->middleware('authorizeAction:update,App\Models\BlockType');

                    Route::post('/{id}/update', 'update')
                        ->name('update')
                        ->middleware('authorizeAction:update,App\Models\BlockType');

                    Route::delete('/{id}/delete', 'delete')
                        ->name('delete')
                        ->middleware('authorizeAction:delete,App\Models\BlockType');

                    Route::post('/delete-item-multiple-checked', 'deleteItemMultipleChecked')
                        ->name('deleteItemMultipleChecked')
                        ->middleware('authorizeAction:deleteMultiple,App\Models\BlockType');
                });

            Route::prefix('categoryPosts')
                ->controller(CategoryPostController::class)
                ->name('categoryPosts.')->group(function () {
                    Route::get('/', 'index')
                        ->name('index')
                        ->middleware('authorizeAction:viewAny,App\Models\CategoryPost');

                    Route::get('/create', 'create')
                        ->name('create')
                        ->middleware('authorizeAction:create,App\Models\CategoryPost');

                    Route::post('/store', 'store')
                        ->name('store')
                        ->middleware('authorizeAction:create,App\Models\CategoryPost');

                    Route::get('/{id}/edit', 'edit')
                        ->name('edit')
                        ->middleware('authorizeAction:update,App\Models\CategoryPost');

                    Route::post('/{id}/update', 'update')
                        ->name('update')
                        ->middleware('authorizeAction:update,App\Models\CategoryPost');

                    Route::delete('/{id}/delete', 'delete')
                        ->name('delete')
                        ->middleware('authorizeAction:delete,App\Models\CategoryPost');

                    Route::post('/change-order', 'changeOrder')
                        ->name('changeOrder')
                        ->middleware('authorizeAction:changeOrder,App\Models\CategoryPost');

                    Route::post('/change-position', 'changePosition')
                        ->name('changePosition')
                        ->middleware('authorizeAction:changePosition,App\Models\CategoryPost');

                    Route::post('/removeAvatarImage', 'removeAvatarImage')
                        ->name('removeAvatarImage');

                    Route::post('/delete-item-multiple-checked', 'deleteItemMultipleChecked')
                        ->name('deleteItemMultipleChecked')
                        ->middleware('authorizeAction:deleteMultiple,App\Models\CategoryPost');
                });

            Route::prefix('posts')
                ->controller(PostController::class)
                ->name('posts.')->group(function () {
                    Route::get('/', 'index')
                        ->name('index')
                        ->middleware('authorizeAction:viewAny,App\Models\Post');

                    Route::get('/create', 'create')
                        ->name('create')
                        ->middleware('authorizeAction:create,App\Models\Post');

                    Route::post('/store', 'store')
                        ->name('store')
                        ->middleware('authorizeAction:create,App\Models\Post');

                    Route::get('/{id}/edit', 'edit')
                        ->name('edit')
                        ->middleware('authorizeAction:update,App\Models\Post');

                    Route::post('/{id}/update', 'update')
                        ->name('update')
                        ->middleware('authorizeAction:update,App\Models\Post');

                    Route::delete('/{id}/delete', 'delete')
                        ->name('delete')
                        ->middleware('authorizeAction:delete,App\Models\Post');

                    Route::post('/change-order', 'changeOrder')
                        ->name('changeOrder')
                        ->middleware('authorizeAction:changeOrder,App\Models\Post');

                    Route::post('/change-hot', 'changeHot')
                        ->name('changeHot')
                        ->middleware('authorizeAction:changeHot,App\Models\Post');

                    Route::post('/change-active', 'changeActive')
                        ->name('changeActive')
                        ->middleware('authorizeAction:changeActive,App\Models\Post');

                    Route::post('/change-status', 'changeStatus')
                        ->name('changeStatus')
                        ->middleware('authorizeAction:changeStatus,App\Models\Post');

                    Route::delete('/destroyImage/{id}', 'destroyImage')
                        ->name('destroyImage');

                    Route::post('/removeAvatarImage', 'removeAvatarImage')
                        ->name('removeAvatarImage');

                    Route::post('/delete-item-multiple-checked', 'deleteItemMultipleChecked')
                        ->name('deleteItemMultipleChecked')
                        ->middleware('authorizeAction:deleteMultiple,App\Models\Post');

                    Route::post('/saveTemporary', 'saveTemporary')
                        ->name('saveTemporary');

                    Route::post('/preview', 'preview')
                        ->name('preview');

                    Route::get('/preview/view', 'showPreview')
                        ->name('preview.view');

                    Route::get('/{id}/copy', 'copy')
                        ->name('copy')
                        ->middleware('authorizeAction:copy,App\Models\Post');

                    Route::post('/copy', 'storeCopy')
                        ->name('storeCopy')
                        ->middleware('authorizeAction:copy,App\Models\Post');
                });

            Route::prefix('tags')
                ->controller(TagController::class)
                ->name('tags.')->group(function () {
                    Route::get('/', 'index')
                        ->name('index')
                        ->middleware('authorizeAction:viewAny,App\Models\Tag');

                    Route::get('/create', 'create')
                        ->name('create')
                        ->middleware('authorizeAction:create,App\Models\Tag');

                    Route::post('/store', 'store')
                        ->name('store')
                        ->middleware('authorizeAction:create,App\Models\Tag');

                    Route::get('/{id}/edit', 'edit')
                        ->name('edit')
                        ->middleware('authorizeAction:update,App\Models\Tag');

                    Route::post('/{id}/update', 'update')
                        ->name('update')
                        ->middleware('authorizeAction:update,App\Models\Tag');

                    Route::delete('/{id}/delete', 'delete')
                        ->name('delete')
                        ->middleware('authorizeAction:delete,App\Models\Tag');

                    Route::post('/change-order', 'changeOrder')
                        ->name('changeOrder')
                        ->middleware('authorizeAction:changeOrder,App\Models\Tag');

                    Route::post('/change-active', 'changeActive')
                        ->name('changeActive')
                        ->middleware('authorizeAction:changeActive,App\Models\Tag');

                    Route::post('/delete-item-multiple-checked', 'deleteItemMultipleChecked')
                        ->name('deleteItemMultipleChecked')
                        ->middleware('authorizeAction:deleteMultiple,App\Models\Tag');
                });


            Route::prefix('genres-movie')
                ->controller(GenreController::class)
                ->name('genres.')->group(function () {
                    Route::get('/', 'index')
                        ->name('index');

                    Route::get('/create', 'create')
                        ->name('create');
                        
                    Route::post('/store', 'store')
                        ->name('store');

                    Route::get('/{id}/edit', 'edit')
                        ->name('edit');

                    Route::post('/{id}/update', 'update')
                        ->name('update');

                    Route::delete('/{id}/delete', 'delete')
                        ->name('delete');

                    Route::post('/change-order', 'changeOrder')
                        ->name('changeOrder');

                    Route::post('/change-position', 'changePosition')
                        ->name('changePosition');

                    Route::post('/removeAvatarImage', 'removeAvatarImage')
                        ->name('removeAvatarImage');
                    Route::post('/delete-item-multiple-checked', 'deleteItemMultipleChecked')
                        ->name('deleteItemMultipleChecked');
                });

            Route::prefix('movie')
                ->controller(MovieController::class)
                ->name('movies.')->group(function () {
                    Route::get('/', 'index')
                        ->name('index');

                    Route::get('/create', 'create')
                        ->name('create');

                    Route::post('/store', 'store')
                        ->name('store');

                    Route::get('/{id}/edit', 'edit')
                        ->name('edit');

                    Route::put('/{id}/update', 'update')
                        ->name('update');

                    Route::delete('/{id}/delete', 'delete')
                        ->name('delete');

                    Route::post('/change-order', 'changeOrder')
                        ->name('changeOrder');

                    Route::post('/change-position', 'changePosition')
                        ->name('changePosition');
                    Route::post('/change-active', 'changeActive')
                        ->name('changeActive');

                    Route::post('/change-hot', 'changeHot')
                        ->name('changeHot')
                        ->middleware('authorizeAction:changeHot,App\Models\Post');
                    Route::post('/removeAvatarImage', 'removeAvatarImage')
                        ->name('removeAvatarImage');
                    Route::post('/removeBannerImage', 'removeBannerImage')
                        ->name('removeBannerImage');
                    Route::post('/delete-item-multiple-checked', 'deleteItemMultipleChecked')
                        ->name('deleteItemMultipleChecked');
                });


            Route::prefix('users')
                ->controller(UserController::class)
                ->name('users.')->group(function () {
                    Route::get('/', 'index')
                        ->name('index')
                        ->middleware('authorizeAction:viewAny,App\Models\User');

                    Route::get('/create', 'create')
                        ->name('create')
                        ->middleware('authorizeAction:create,App\Models\User');

                    Route::post('/store', 'store')
                        ->name('store')
                        ->middleware('authorizeAction:create,App\Models\User');

                    Route::get('/{id}/edit', 'edit')
                        ->name('edit')
                        ->middleware('authorizeAction:update,App\Models\User');

                    Route::post('/{id}/update', 'update')
                        ->name('update')
                        ->middleware('authorizeAction:update,App\Models\User');

                    Route::delete('/{id}/delete', 'delete')
                        ->name('delete')
                        ->middleware('authorizeAction:delete,App\Models\User');

                    Route::post('/removeAvatarImage', 'removeAvatarImage')
                        ->name('removeAvatarImage');

                    Route::post('/change-status', 'changeStatus')
                        ->name('changeStatus')
                        ->middleware('authorizeAction:changeStatus,App\Models\User');
                });

            Route::prefix('roles')
                ->controller(RoleController::class)
                ->name('roles.')->group(function () {
                    Route::get('/', 'index')
                        ->name('index')
                        ->middleware('authorizeAction:viewAny,App\Models\Role');

                    Route::get('/create', 'create')
                        ->name('create')
                        ->middleware('authorizeAction:create,App\Models\Role');

                    Route::post('/store', 'store')
                        ->name('store')
                        ->middleware('authorizeAction:create,App\Models\Role');

                    Route::get('/{id}/edit', 'edit')
                        ->name('edit')
                        ->middleware('authorizeAction:update,App\Models\Role');

                    Route::post('/{id}/update', 'update')
                        ->name('update')
                        ->middleware('authorizeAction:update,App\Models\Role');

                    Route::delete('/{id}/delete', 'delete')
                        ->name('delete')
                        ->middleware('authorizeAction:delete,App\Models\Role');

                    Route::post('/removeAvatarImage', 'removeAvatarImage')
                        ->name('removeAvatarImage');
                });

            Route::prefix('modules')
                ->controller(ModuleController::class)
                ->name('modules.')->group(function () {
                    Route::get('/', 'index')
                        ->name('index')
                        ->middleware('authorizeAction:viewAny,App\Models\Module');

                    Route::get('/create', 'create')
                        ->name('create')
                        ->middleware('authorizeAction:create,App\Models\Module');

                    Route::post('/store', 'store')
                        ->name('store')
                        ->middleware('authorizeAction:create,App\Models\Module');

                    Route::get('/{id}/edit', 'edit')
                        ->name('edit')
                        ->middleware('authorizeAction:update,App\Models\Module');

                    Route::post('/{id}/update', 'update')
                        ->name('update')
                        ->middleware('authorizeAction:update,App\Models\Module');

                    Route::delete('/{id}/delete', 'delete')
                        ->name('delete')
                        ->middleware('authorizeAction:delete,App\Models\Module');

                    Route::post('/delete-item-multiple-checked', 'deleteItemMultipleChecked')
                        ->name('deleteItemMultipleChecked')
                        ->middleware('authorizeAction:deleteMultiple,App\Models\Module');
                });

            Route::prefix('permissions')
                ->controller(PermissionController::class)
                ->name('permissions.')->group(function () {
                    Route::get('/', 'index')
                        ->name('index')
                        ->middleware('authorizeAction:viewAny,App\Models\Permission');

                    Route::get('/create', 'create')
                        ->name('create')
                        ->middleware('authorizeAction:create,App\Models\Permission');

                    Route::post('/store', 'store')
                        ->name('store')
                        ->middleware('authorizeAction:create,App\Models\Permission');

                    Route::get('/{id}/edit', 'edit')
                        ->name('edit')
                        ->middleware('authorizeAction:update,App\Models\Permission');

                    Route::post('/{id}/update', 'update')
                        ->name('update')
                        ->middleware('authorizeAction:update,App\Models\Permission');

                    Route::delete('/{id}/delete', 'delete')
                        ->name('delete')
                        ->middleware('authorizeAction:delete,App\Models\Permission');

                    Route::post('/delete-item-multiple-checked', 'deleteItemMultipleChecked')
                        ->name('deleteItemMultipleChecked')
                        ->middleware('authorizeAction:deleteMultiple,App\Models\Permission');
                });
            Route::prefix('foods')
                ->controller(FoodController::class)
                ->name('foods.')->group(function () {
                    Route::get('/', 'index')
                        ->name('index')
                        ->middleware('authorizeAction:viewAny,App\Models\Food');
                    Route::get('/create', 'create')
                        ->name('create')
                        ->middleware('authorizeAction:create,App\Models\Food');
                    Route::post('/store', 'store')
                        ->name('store')
                        ->middleware('authorizeAction:create,App\Models\Food');
                    Route::get('/{id}/edit', 'edit')
                        ->name('edit')
                        ->middleware('authorizeAction:update,App\Models\Food');
                    Route::put('/{id}/update', 'update')
                        ->name('update')
                        ->middleware('authorizeAction:update,App\Models\Food');
                    Route::delete('/{id}/delete', 'destroy')
                        ->name('delete')
                        ->middleware('authorizeAction:delete,App\Models\Food');
                    Route::post('/change-order', 'changeOrder')
                        ->name('changeOrder')
                        ->middleware('authorizeAction:changeOrder,App\Models\Food');
                    Route::post('/change-active', 'changeActive')
                        ->name('changeActive')
                        ->middleware('authorizeAction:changeActive,App\Models\Food');
                    Route::post('/removeAvatarImage', 'removeAvatarImage')
                        ->name('removeAvatarImage');
                    Route::post('/delete-item-multiple-checked', 'deleteItemMultipleChecked')
                        ->name('deleteItemMultipleChecked')
                        ->middleware('authorizeAction:deleteMultiple,App\Models\Post');
                });
            Route::prefix('food-types')
                ->controller(FoodTypeController::class)
                ->name('food-types.')->group(function () {
                    Route::get('/', 'index')
                        ->name('index')
                        ->middleware('authorizeAction:viewAny,App\Models\FoodType');
                    Route::get('/create', 'create')
                        ->name('create')
                        ->middleware('authorizeAction:create,App\Models\FoodType');
                    Route::post('/store', 'store')
                        ->name('store')
                        ->middleware('authorizeAction:create,App\Models\FoodType');
                    Route::get('/{id}/edit', 'edit')
                        ->name('edit')
                        ->middleware('authorizeAction:update,App\Models\FoodType');
                    Route::put('/{id}/update', 'update')
                        ->name('update')
                        ->middleware('authorizeAction:update,App\Models\FoodType');
                    Route::delete('/{id}/delete', 'destroy')
                        ->name('delete')
                        ->middleware('authorizeAction:delete,App\Models\FoodType');
                    Route::post('/change-order', 'changeOrder')
                        ->name('changeOrder')
                        ->middleware('authorizeAction:changeOrder,App\Models\FoodType');
                    Route::post('/change-active', 'changeActive')
                        ->name('changeActive')
                        ->middleware('authorizeAction:changeActive,App\Models\FoodType');
                    Route::post('/delete-item-multiple-checked', 'deleteItemMultipleChecked')
                        ->name('deleteItemMultipleChecked')
                        ->middleware('authorizeAction:deleteMultiple,App\Models\FoodType');
                });
            Route::prefix('food-combos')
                ->controller(FoodComboController::class)
                ->name('food-combos.')->group(function () {
                    Route::get('/', 'index')
                        ->name('index')
                        ->middleware('authorizeAction:viewAny,App\Models\FoodCombo');
                    Route::get('/create', 'create')
                        ->name('create')
                        ->middleware('authorizeAction:create,App\Models\FoodCombo');
                    Route::post('/store', 'store')
                        ->name('store')
                        ->middleware('authorizeAction:create,App\Models\FoodCombo');
                    Route::get('/{id}/edit', 'edit')
                        ->name('edit')
                        ->middleware('authorizeAction:update,App\Models\FoodCombo');
                    Route::put('/{id}/update', 'update')
                        ->name('update')
                        ->middleware('authorizeAction:update,App\Models\FoodCombo');
                    Route::delete('/{id}/delete', 'destroy')
                        ->name('delete')
                        ->middleware('authorizeAction:delete,App\Models\FoodCombo');
                    Route::post('/change-order', 'changeOrder')
                        ->name('changeOrder')
                        ->middleware('authorizeAction:changeOrder,App\Models\FoodCombo');
                    Route::post('/change-active', 'changeActive')
                        ->name('changeActive')
                        ->middleware('authorizeAction:changeActive,App\Models\FoodCombo');
                    Route::post('/removeAvatarImage', 'removeAvatarImage')
                        ->name('removeAvatarImage');
                    Route::post('/delete-item-multiple-checked', 'deleteItemMultipleChecked')
                        ->name('deleteItemMultipleChecked')
                        ->middleware('authorizeAction:deleteMultiple,App\Models\FoodCombo');
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

        Route::prefix('cities')
            ->controller(CityController::class)
            ->name('cities.')
            ->group(function () {
                Route::get('/', 'index')
                     ->name('index');
                Route::get('/create', 'create')
                    ->name('create');
                Route::post('/store', 'store')
                    ->name('store');
                Route::get('/{id}/edit', 'edit')
                    ->name('edit');
                Route::put('/{id}/update', 'update')
                    ->name('update');
                Route::delete('/{id}/delete', 'destroy')
                    ->name('delete');
            });

        Route::prefix('areas')
            ->controller(AreaController::class)
            ->name('areas.')
            ->group(function () {
                Route::get('/', 'index')
                    ->name('index');
                Route::get('/create', 'create')
                    ->name('create');
                Route::post('/store', 'store')
                    ->name('store');
                Route::get('/{id}/edit', 'edit')
                    ->name('edit');
                Route::put('/{id}/update', 'update')
                    ->name('update');
                Route::delete('/{id}/delete', 'destroy')
                    ->name('delete');
            });

        Route::prefix('payments')
            ->controller(PaymentController::class)
            ->name('payments.')->group(function () {
                Route::get('/', 'index')
                    ->name('index');
                Route::get('/create', 'create')
                    ->name('create');
                Route::post('/store', 'store')
                    ->name('store');
                Route::get('/{id}/edit', 'edit')
                    ->name('edit');
                Route::put('/{id}/update', 'update')
                    ->name('update');
                Route::delete('/{id}/delete', 'delete')
                    ->name('delete');
                Route::post('/change-active', 'changeActive')
                    ->name('changeActive');
                Route::post('/removeAvatarImage', 'removeAvatarImage')
                    ->name('removeAvatarImage');
            });

        Route::prefix('actors')
            ->controller(ActorController::class)
            ->name('actors.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')
                    ->name('create');
                Route::post('/store', 'store')
                    ->name('store');
                Route::get('/{id}/edit', 'edit')
                    ->name('edit');
                Route::put('/{id}/update', 'update')
                    ->name('update');
                Route::delete('/{id}/delete', 'destroy')
                    ->name('delete');
                Route::post('/removeAvatarImage', 'removeAvatarImage')
                    ->name('removeAvatarImage');
                Route::post('/delete-item-multiple-checked', 'deleteItemMultipleChecked')
                    ->name('deleteItemMultipleChecked');
            });

        Route::prefix('cinemas')
            ->controller(CinemaController::class)
            ->name('cinemas.')->group(function () {
                Route::get('/', 'index')
                    ->name('index');
                Route::get('/create', 'create')
                    ->name('create');
                Route::post('/store', 'store')
                    ->name('store');
                Route::get('/{id}/edit', 'edit')
                    ->name('edit');
                Route::put('/{id}/update', 'update')
                    ->name('update');
                Route::delete('/{id}/delete', 'destroy')
                    ->name('delete');
                Route::post('/change-active', 'changeActive')
                    ->name('changeActive');
                Route::post('/removeAvatarImage', 'removeAvatarImage')
                    ->name('removeAvatarImage');
                Route::post('/delete-item-multiple-checked', 'deleteItemMultipleChecked')
                    ->name('deleteItemMultipleChecked');
            });
    });
