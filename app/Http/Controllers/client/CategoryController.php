<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public static function load_all_categories()
    {
        return Post::select('category_id', DB::raw('count(*) as post_count'))
            ->where('is_active', 1)
            ->groupBy('category_id')
            ->get();
    }
}
