<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ResetPasswordController extends Controller
{
    public function showResetForm()
    {
        return view('auth.forgot-password');
    }

    public function forgot(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ], [
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'email.exists' => 'Email này không tồn tại',
        ]);
        $password = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz0123456789'), 0, 6);
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        User::where('email', $request->email)->update([
            'password' => $hashedPassword
        ]);

        Mail::raw("Mật khẩu của bạn là: {$password}", function ($message) use ($request) {
            $message->to($request->email)->subject('Thông tin mật khẩu');
        });

        return redirect()->route('dang-nhap')->with('succes', 'Vui lòng check gmail');
    }
}
