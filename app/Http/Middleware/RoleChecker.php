<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleChecker {
    public function handle($request, Closure $next, string $role) {
        if ($request->user() && $request->user()->role == $role) {
            return $next($request);
        }

        return redirect('/');
    }
}
