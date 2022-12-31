<?php

namespace App\Http\Middleware;

use App\Exceptions\AuthException;
use App\Exceptions\DemoEx;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            throw new AuthException("Bạn chưa đăng nhập", 401);
            return route('login');
        }
    }
}
