<?php
use Illuminate\Support\Facades\Route;
use Jenssegers\Agent\Agent;

$agent = new Agent();
if ($agent->isMobile()) {
    Route::get('/', function () {
        return view('mobile.pages.home');
    });

    Route::get('/gia-ve', function () {
        return view('mobile.pages.ticket-price');
    });

    Route::get('/lich-chieu', function () {
        return view('mobile.pages.showtime');
    });

    Route::get('/login', function () {
        return view('mobile.pages.auth.login');

    });
    Route::get('/register', function () {
        return view(view: 'mobile.pages.auth.register');

    });
    Route::get('/resest', function () {
        return view('mobile.pages.auth.forgot_pass_work');
    });

    Route::get('/phim', function () {
        return view('mobile.pages.movie');
    });

    Route::get('/phim-chi-tiet', function () {
        return view('mobile.pages.movie-detail');
    });

    // check đăng nhập mới vào này ko đẩy sang route login
    Route::get('/dat-ve', function () {
        return view('mobile.pages.buy-ticket');
    });

    Route::get('/dat-ve/xac-nhan', function () {
        return view('mobile.pages.payment-verification');
    });



}
