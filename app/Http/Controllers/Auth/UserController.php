<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public static function load_5_users()
    {
        return User::query()->limit(5)->get();
    }
    public static function index()
    {
        $users = User::query()->get();
        return view('admin.Auth.index', compact('users'));
    }
}
