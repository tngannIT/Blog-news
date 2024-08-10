<?php

namespace App\Http\Middleware;

use AWS\CRT\HTTP\Response;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $permission)
    {
        if(Auth::check() && Auth::user()->cant($permission)){
            abort(403, 'Bạn không có quyền truy cập');
        }
        return $next($request);
    }
}
