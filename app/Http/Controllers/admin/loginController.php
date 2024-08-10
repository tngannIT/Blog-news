<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class loginController extends Controller
{
    public function index(){
        return view("admin.auth.login");
    }

    public function login(LoginRequest $request){ // validate dữ liệu
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($validated, ['role => 2'])) { // đăng nhập
            toastr()->success('Đăng nhập thành công!'); // thông báo
            return redirect()->route('admin.dashboard'); // chuyển hướng sang trang dashboard
        }

        toastr()->error('Sai tên đăng nhập hoặc mật khẩu ');
        return redirect()->back();
 
        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ])->onlyInput('email');


    }
    public function doLogout(){ // get[/admin/doLogout]
        Auth::logout(); // đăng xuất
        toastr()->success('Đăng xuất thành công'); // thông báo
        return redirect()-> route('admin.login.index'); //chuyển hướng ra trang login
    }
    
}
