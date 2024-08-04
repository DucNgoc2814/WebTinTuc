<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function store()
    {
        try {
            Comment::query()->create([
                'user_id' => auth()->user()->id,
                'post_id' => request()->post_id,
                'content' => request()->content,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
                return back()->withFragment('comment-section');
        } catch (Exception $exception) {

            return back();
        }
    }
}
