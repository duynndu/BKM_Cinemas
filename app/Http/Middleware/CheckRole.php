<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        $user = Auth::user();
        if(!$user){
            return response()->json(['error' => 'Chưa đăng nhập'], 401);
        }
        if (!$user->hasAnyRole($roles)) {
            return response()->json(['error' => 'Không có quyền truy cập'], 403);
        }
        return $next($request);
    }
}
