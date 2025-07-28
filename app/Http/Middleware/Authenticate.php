<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    public function redirectTo($request) {
        if (!$request->expectsJson()) {
            return route('admin.auth.index');
        }
    }
}
