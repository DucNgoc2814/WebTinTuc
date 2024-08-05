<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use HTMLPurifier;
use HTMLPurifier_Config;

class PostController extends Controller
{
    // các hàm static cho phép không cần khởi tạo đối tượng
    public static function load_all_posts()
    {
        return Post::query()
            ->join('media', 'posts.id', 'media.mime_id')
            ->where('media.mime_type', 'post')
            ->where('is_active', 1)
            ->select('posts.*', 'media.url as image')
            ->orderBy('id', 'DESC')->paginate(10);
    }
    public static function load_popular_posts()
    {
        return Post::query()
            ->join('media', 'posts.id', 'media.mime_id')
            ->where('media.mime_type', 'post')
            ->where('is_active', 1)
            ->Where('is_popular', 1)
            ->select('posts.*', 'media.url as image')
            ->orderBy('id', 'DESC')->limit(5)->get();
    }
    public static function load_trending_posts()
    {
        return Post::query()
            ->join('media', 'posts.id', 'media.mime_id')
            ->where('media.mime_type', 'post')
            ->where('is_active', 1)
            ->Where('is_trending', 1)
            ->select('posts.*', 'media.url as image')
            ->orderBy('id', 'DESC')->limit(5)->get();
    }
    public static function load_new_posts()
    {
        return Post::query()
            ->join('media', 'posts.id', 'media.mime_id')
            ->where('media.mime_type', 'post')
            ->where('is_active', 1)
            ->select('posts.*', 'media.url as image')
            ->orderBy('id', 'DESC')->limit(5)->get();
    }

    public static function baiVietChiTiet($slug)
    {
        $post = Post::query()
            ->join('media', 'posts.id', 'media.mime_id')
            ->where('media.mime_type', 'post')
            ->select('posts.*', 'media.url as image')
            ->where('slug', $slug)
            ->first();

        $post->views += 1;
        $post->save();

        $comments = Comment::where('post_id', $post->id)->orderbyDesc('id')->get();
        return view('client.bai-viet-chi-tiet', compact('post', 'comments'));
    }
    public function baiVietDanhMuc($slug)
    {
        $category = Category::where('slug', $slug)
            ->where('is_active', 1)
            ->first();

        $posts = Post::query()
            ->join('media', 'posts.id', 'media.mime_id')
            ->where('media.mime_type', 'post')
            ->where('is_active', 1)
            ->where('category_id', $category->id)
            ->select('posts.*', 'media.url as image')
            ->orderByDesc('id')
            ->paginate(5);

        $data = [
            'posts' => $posts,
            'category' => $category
        ];
        return view('client.bai-viet-danh-muc', compact('data'));
    }

    public function timKiem(Request $request)
    {
        $search = $request->search;
        $posts = Post::query()
            ->join('media', 'posts.id', 'media.mime_id')
            ->where('media.mime_type', 'post')
            ->where('is_active', 1)
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('content', 'LIKE', "%{$search}%")
            ->select('posts.*', 'media.url as image')
            ->orderByDesc('id')
            ->paginate(10)->appends(request()->except('page'));;

        return view('client.tim-kiem', compact('posts', 'search'));
    }
}
