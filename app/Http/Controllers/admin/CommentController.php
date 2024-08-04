<?php

namespace App\Http\Controllers\admin;

use App\Models\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Http\Controllers\Controller;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PATH_VIEW = 'admin.comments.';

    public function index()
    {
        $comments = Comment::with('post')->get();
        return view(self::PATH_VIEW . __FUNCTION__, compact('comments'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $comment)
    {
        $comment = Comment::findOrFail($comment);
        $comment->delete();
        return back();
    }

    public function trash_can()
    {
        $comments = Comment::onlyTrashed()->get();
        return view(self::PATH_VIEW . 'recycle', compact('comments'));
    }

    public function restore($id)
    {
        $comment = Comment::withTrashed()->findOrFail($id);
        $comment->restore();
        return back();
    }
}
