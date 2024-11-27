<?php

use App\Events\BookSeat;
use App\Http\Controllers\Client\PostByCategoryController;
use App\Jobs\ResetSeatStatus;
use App\WebSockets\CustomWebSocketHandler;
use BeyondCode\LaravelWebSockets\Facades\WebSocketsRouter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\DepositController;
use App\Http\Controllers\Client\PaymentController;
use App\Http\Controllers\Auth\Client\AuthController;
use App\Http\Controllers\Client\ListMoviesController;
use App\Http\Controllers\Auth\Client\GoogleController;
use App\Http\Controllers\Client\MovieDetailController;
use App\Http\Controllers\Auth\Client\FacebookController;
use App\Http\Controllers\Client\AboutController;
use App\Http\Controllers\Client\PostController;
use App\Http\Controllers\Client\PostDetailController;
use App\Models\Showtime;
use Illuminate\Support\Facades\DB;

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


Route::get('/',                     [HomeController::class, 'index'])->name('home');

// Tài khoản
Route::get('/account',              [AuthController::class, 'account'])->name('account');

Route::post('/register',            [AuthController::class, 'register'])
    ->middleware('checkLogin')
    ->name('register');

Route::post('/login',               [AuthController::class, 'login'])
    ->middleware('checkLogin')
    ->name('login');

Route::post('/logout',              [AuthController::class, 'logout'])
    ->name('logout');

Route::get('/forgot-password',      [AuthController::class, 'forgotPassword'])
    ->middleware('checkLogin')
    ->name('forgotPassword');

Route::post('/sendResetLinkEmail',  [AuthController::class, 'sendResetLinkEmail'])
    ->middleware('checkLogin')
    ->name('sendResetLinkEmail');

Route::post('/resetPassword',       [AuthController::class, 'resetPassword'])
    ->middleware('checkLogin')
    ->name('resetPassword');

Route::post('/changePassword',      [AuthController::class, 'changePassword'])
    ->name('changePassword');

Route::post('/updateAvatar',        [AuthController::class, 'updateAvatar'])
    ->name('updateAvatar');

Route::post('/updateProfile',        [AuthController::class, 'updateProfile'])
    ->name('updateProfile');
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

Route::get('tim-kiem', [ListMoviesController::class, 'searchMovies'])->name('search');


// Nạp tiền
Route::post('/processDeposit', [DepositController::class, 'processDeposit'])->name('processDeposit');

Route::get('/vnpayReturn', [DepositController::class, 'vnpayReturn'])->name('vnpayReturn');

Route::get('/momoReturn', [DepositController::class, 'momoReturn'])->name('momoReturn');

Route::get('/zaloPayReturn', [DepositController::class, 'zaloPayReturn'])->name('zaloPayReturn');
// End Nạp tiền

Route::get('/', [HomeController::class, 'index'])->name('home');

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

Route::get('/phim', [ListMoviesController::class, 'movies'])->name('movie');

Route::get('/phim/{slug}', [MovieDetailController::class, 'movieDetail'])->name('movie.detail');

Route::get('/gioi-thieu', [AboutController::class, 'index'])->name('about');
Route::get('/gia-ve', function () {
    return view('client.pages.ticket-price');
});

Route::get('/lich-chieu', function () {
    return view('client.pages.showtime');
});

Route::get('/dat-ve/{showtime}', function (Showtime $showtime) {
    $userId = optional(auth()->user())->id;

    // Tìm và xóa job có payload khớp
    DB::table('jobs')
        ->where('payload', 'LIKE', '%' . $showtime->id . '%')
        ->where('payload', 'LIKE', '%' . $userId . '%')
        ->delete();
    $endTime = now()->addSeconds(300);
    ResetSeatStatus::dispatch($showtime->id, $userId);
    ResetSeatStatus::dispatch($showtime->id, $userId)->delay($endTime);
    ResetSeatStatus::dispatch($showtime->id, $userId, 'SEAT_AWAITING_PAYMENT_ACTION');
    ResetSeatStatus::dispatch($showtime->id, $userId, 'SEAT_WAITING_PAYMENT');

    return view('client.pages.buy-ticket', [
        'showtimeId' => $showtime->id,
        'endTime' => $endTime->toIso8601String()
    ]);
})->name("buy-ticket");

Route::get('/thanh-cong', function () {
    return view('client.pages.payment-success');
});

Route::get('/dat-ve/xac-nhan', function () {
    return view('client.pages.payment-verification');
});

Route::get('/dat-ve/thanh-toan', function () {
    return view('client.pages.payment-verification-step2');
});

Route::get('/{slug}', [PostController::class, 'list'])->name('post.list');

Route::get('/{cate_slug}/{slug}', [PostController::class, 'detail'])->name('post.detail');
