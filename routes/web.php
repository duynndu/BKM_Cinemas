<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\PostController;
use App\Http\Controllers\Client\CategoryPostController;
use App\Http\Controllers\Auth\Client\AuthController;
use App\Http\Controllers\Auth\Client\FacebookController;
use App\Http\Controllers\Auth\Client\GoogleController;
use App\Http\Controllers\Client\PaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/danh-muc/{slug}', [CategoryPostController::class, 'categoryPost'])->name('category.post');
Route::get('/tin-tuc/{slug}', [PostController::class, 'postDetail'])->name('post.detail');

// Tài khoản
Route::get('/account', [AuthController::class, 'account'])->name('account');

Route::post('/register', [AuthController::class, 'register'])
    ->middleware('checkLogin')
    ->name('register');

Route::post('/login', [AuthController::class, 'login'])
    ->middleware('checkLogin')
    ->name('login');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])
    ->middleware('checkLogin')
    ->name('forgotPassword');

Route::post('/sendResetLinkEmail', [AuthController::class, 'sendResetLinkEmail'])
    ->middleware('checkLogin')
    ->name('sendResetLinkEmail');

Route::post('/resetPassword', [AuthController::class, 'resetPassword'])
    ->middleware('checkLogin')
    ->name('resetPassword');

Route::post('/changePassword', [AuthController::class, 'changePassword'])
    ->name('changePassword');
// End Tài khoản

// Đăng nhập facebook
Route::prefix('facebook')
    ->name('facebook.')
    ->controller(FacebookController::class)
    ->middleware('checkLogin')
    ->group(function () {
        Route::get('/redirect', 'redirectToFacebook')->name('redirectToFacebook');

        Route::get('/callback', 'handleFacebookCallback')->name('handleFacebookCallback');
    });
// End đăng nhập facebook

// Đăng nhập google
Route::prefix('google')
    ->name('google.')
    ->controller(GoogleController::class)
    ->middleware('checkLogin')
    ->group(function () {
        Route::get('/redirect', 'redirectToGoogle')->name('redirectToGoogle');

        Route::get('/callback', 'handleGoogleCallback')->name('handleGoogleCallback');
    });
// End đăng nhập google

// Nạp tiền
Route::get('/nap-tien', [PaymentController::class, 'showDepositForm'])->name('showDepositForm');

Route::post('/processDeposit', [PaymentController::class, 'processDeposit'])->name('processDeposit');

Route::get('/vnpayReturn', [PaymentController::class, 'vnpayReturn'])->name('vnpayReturn');

Route::get('/momoReturn', [PaymentController::class, 'momoReturn'])->name('momoReturn');

Route::get('/zaloPayReturn', [PaymentController::class, 'zaloPayReturn'])->name('zaloPayReturn');
// End Nạp tiền

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/danh-muc/{slug}', [CategoryPostController::class, 'categoryPost'])->name('category.post');

Route::get('/tin-tuc/{slug}', [PostController::class, 'postDetail'])->name('post.detail');

Route::get('/profile', function () {
    return view('client.pages.profile.info');
});
Route::get('/profile-pass', function () {
    return view('client.pages.profile.change-pass-word');
});
Route::get('/profile-change-info', function () {
    return view('client.pages.profile.change-info');
});
Route::get('/profile-history-ticket', function () {
    return view('client.pages.profile.history-ticket');
});

Route::get('/phim', function () {
    return view('client.pages.movie');
});
Route::get('/phim-chi-tiet', function () {
    return view('client.pages.movie-detail');
});

Route::get('/chi-tiet-tin', function () {
    return view('client.pages.post-detail');
});
Route::get('/gia-ve', function () {
    return view('client.pages.ticket-price');
});
Route::get('/khuyen-mai', function () {
    return view('client.pages.promotion');
});

Route::get('/danh-gia', function () {
    return view('client.pages.review');
});

Route::get('/dich-vu', function () {
    return view('client.pages.service');
});

Route::get('/lich-chieu', function () {
    return view('client.pages.showtime');
});

Route::get('/dat-ve', function () {
    return view('client.pages.buy-ticket');
});
Route::get('/dat-ve/xac-nhan', function () {
    return view('client.pages.payment-verification');
});

Route::get('/dat-ve/thanh-toan', function () {
    return view('client.pages.payment-verification-step2');
});

