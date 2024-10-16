<?php
use App\Http\Controllers\Mobile\HomeController;
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

}
