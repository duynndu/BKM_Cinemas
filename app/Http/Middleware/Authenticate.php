<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get đường dẫn mà người dùng sẽ được chuyển hướng đến khi họ chưa được xác thực.
     * Xác định xem yêu cầu hiện tại có thể mong đợi phản hồi JSON hay không.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }
}
