<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function (){
    return view('admin.pages.dashboard');
})->name('admin.dashboard');

Route::group(['prefix' => 'filemanager', 'middleware' => ['web']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
