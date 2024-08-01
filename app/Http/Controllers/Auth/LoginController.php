<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login()
    {
        $rules = [
            'email'     => 'required|string|email',
            'password'  => 'required|string',
        ];

        $messages =  [
            'email.required'        => 'Email không được bỏ trống.',
            'email.email'           => 'Email không hợp lệ.',
            'password.required'     => 'Mật khẩu không được bỏ trống.',
        ];
        $account = request()->validate($rules, $messages);
        if (Auth::attempt($account)) {
            request()->session()->regenerate();
            if (auth()->user()->type === 'admin') {
                return redirect()->intended('/admin');
            }
            return redirect()->intended('/');
        }
        return back()->withErrors([
            'email' => 'Thông tin tài khoản hoặc mật khẩu không chính xác.',
        ])->onlyInput('email');
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        return redirect('/');
    }
}
