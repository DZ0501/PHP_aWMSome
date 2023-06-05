<?php

namespace App\Http\Middleware;

use App\Core\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $guard = null) {
        if (Auth::guard($guard)->check()) {
            $role = Auth::user()->role_id;

            switch ($role) {
                case '1':
                    return redirect('/dashboard_authorized');
                    break;
                case '2':
                    return redirect('/dashboard_admin');
                    break;

                default:
                    return redirect('/dashboard');
                    break;
            }
        }
        return $next($request);
    }
}
