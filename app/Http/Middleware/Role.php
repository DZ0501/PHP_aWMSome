<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Auth\Middleware\Role as Middleware;
use Illuminate\Support\Facades\Auth;

class Role
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        $user = Auth::user();
        foreach ($roles as $role) {
            if ($user->role_id == $role) {
                return $next($request);
            }
        }

        return redirect('/');
    }
}
