<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    public function getPostByLoai($category_id)
    {
        try {
            $posts = Post::where('category_id', $category_id)->get();
            return response()->json($posts);
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'err' => $th->getMessage()
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function getPostDetail($id)
    {
        try {
            $post = Post::find($id);
            return response()->json($post);
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'err' => $th->getMessage()
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}
