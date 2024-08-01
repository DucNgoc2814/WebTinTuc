<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register()
    {
        $messages =  [
            'name.required'         => 'Tên hiển thị không được bỏ trống.',
            'email.required'        => 'Email không được bỏ trống.',
            'email.email'           => 'Email không hợp lệ.',
            'email.unique'          => 'Email đã tồn tại.',
            'password.required'     => 'Mật khẩu không được bỏ trống.',
            'password.min'          => 'Mật khẩu phải có ít nhất 6 ký tự.',
            'password.confirmed'    => 'Xác nhận mật khẩu không khớp.',
        ];

        $rule = [
            'name'       => 'required|string|max:255',
            'email'      => 'required|string|email|max:255|unique:users',
            'password'   => 'required|string|min:6|confirmed',
        ];

        $account = request()->validate($rule, $messages);
        $user = User::create($account);

        Auth::login($user);
        request()->session()->regenerate();

        return redirect()->route('/');
    }
}
