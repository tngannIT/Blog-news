<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Closure;
use Illuminate\Http\Request;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Kiểm tra người dùng đã đăng nhập chưa
        if (Auth::check()) {
            $user = Auth::user();
            // Kiểm tra vai trò và trạng thái của người dùng
            if ($user->status == '1') {
                return $next($request);
            } if ($user->status == '2') {
                Auth::logout(); // Đăng xuất người dùng
                toastr()->error('Tài khoản này đã bị chặn!');
            }
        } else {
            Auth::logout(); // Đăng xuất người dùng (nếu có)
            toastr()->error('Vui lòng đăng nhập để sử dụng!');
        }

        return redirect()->route('admin.login.index');
    }
}
