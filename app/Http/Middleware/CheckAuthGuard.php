<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAuthGuard
{
    public function handle($request, Closure $next)
    {
        // if ($request->header('Accept') === 'application/json') {
        //     Auth::shouldUse('api');
        // } else {
        //     Auth::shouldUse('web');
        // }
        // Auth::shouldUse('web');
        return $next($request);
    }
}
