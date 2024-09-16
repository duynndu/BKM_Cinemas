<?php

use App\Http\Controllers\Admin\CategoryPostController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function (){
    return view('admin.pages.dashboard');
})->name('admin.dashboard');
Route::group(['prefix' => 'filemanager', 'middleware' => ['web']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
Route::prefix('admin')->middleware(['web'])
    ->name('admin.')
    ->group(function () {
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
    });

