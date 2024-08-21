<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function (){
    return view('admin.pages.dashboard');
})->name('admin.dashboard');
