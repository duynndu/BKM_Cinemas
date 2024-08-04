<?php

use App\Constants\PermissionConstant;
use App\Constants\RoleConstant;
use App\Mail\MyEmail;
use App\Mail\OrderShipped;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

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
// Fake login as user with ID 1
$user = User::find(1);
auth()->login($user);

Route::get('/', function () {
//    $user = User::with(['roles.permissions'])->find(1);
    $user = auth()->user();
    return response()->json($user->hasAnyRole(RoleConstant::SUPPER_ADMIN));
});
