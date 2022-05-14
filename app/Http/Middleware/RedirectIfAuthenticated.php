<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {

            if ($guard == "isAdmin" && Auth::guard($guard)->check()) {
                return redirect()->route('admin.index');
            }
            if ($guard == "isStudent" && Auth::guard($guard)->check()) {
                return redirect()->route('student.index');
            }
            if ($guard == "isEndorser" && Auth::guard($guard)->check()) {
                return redirect()->route('employee.index');
            }

        return $next($request);
    }
}
