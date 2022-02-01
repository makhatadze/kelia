<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateClient extends Middleware {
    protected function redirectTo($request): ?string {
        if (!Auth::check()) {
            return route('login_client_page');
        }
    }
}
