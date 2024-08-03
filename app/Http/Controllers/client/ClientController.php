<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;

class ClientController extends Controller
{

    const URL_USER = '\App\Http\Controllers\auth\UserController';
    const URL_CATEGORY = '\App\Http\Controllers\client\CategoryController';
    const URL_POST = '\App\Http\Controllers\client\PostController';

    public function index()
    {
        $tac_gias       = (self::URL_USER)::load_5_users();
        $danh_mucs      = (self::URL_CATEGORY)::load_all_categories();
        $post_popular   = (self::URL_POST)::load_popular_posts();
        $post_new       = (self::URL_POST)::load_new_posts();
        $post_trending  = (self::URL_POST)::load_trending_posts();
        $posts      = (self::URL_POST)::load_all_posts();
        
        $data = [
            'tac_gias' => $tac_gias,
            'danh_mucs' => $danh_mucs,
            'post_popular' => $post_popular,
            'post_new' => $post_new,
            'post_trending' => $post_trending,
            'posts' => $posts,
        ];

        return view('index', compact('data'));
    }
    public function lienHe()
    {
        return view('client.lien-he');
    }
    public function gioiThieu()
    {
        return view('client.gioi-thieu');
    }
}
