<?php

namespace App\Http\Controllers\admin;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Media;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use voku\helper\ASCII;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PATH_VIEW = 'admin.post.';

    public function index()
    {
        $posts = Post::where('is_active', 1)->orderByDesc('id')->paginate(10);
        return view(self::PATH_VIEW . __FUNCTION__, compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $danhMucs = Category::all();
        return view(self::PATH_VIEW . __FUNCTION__, compact('danhMucs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $image = '';
        try {
            DB::transaction(function () use ($request) {
                if ($request->hasFile("image")) {
                    $image = Storage::put('', $request->file("image"));
                }
                $slug = Str::slug(ASCII::to_ascii($request->title));
                $post = Post::create([
                    'user_id' => auth()->user()->id,
                    'title' => $request->title,
                    'slug' => $slug,
                    'description' => $request->description,
                    'content' => $request->content,
                    'category_id' => $request->category_id,
                    'is_active' => $request->is_active,
                    'is_trending' => $request->has('is_trending'),
                    'is_popular' => $request->has('is_popular')
                ]);
                Media::query()->create([
                    'url' => $image,
                    'mime_id' => $post->id,
                    'mime_type' => 'post',
                ]);
            }, 3);

            return redirect()
                ->route('admin.bai-viet.index')
                ->with('success', 'Thao tác thành công!');
        } catch (Exception $exception) {
            if (Storage::exists($image)) {
                Storage::delete($image);
            }
            return back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(String $post)
    {
        $data = Post::query()->find($post);
        $post = Post::query()
            ->join('media', 'posts.id', 'media.mime_id')
            ->where('media.mime_type', 'post')
            ->select('posts.*', 'media.url as image')
            ->where('slug', $data->slug)
            ->first();

        return view('client.bai-viet-chi-tiet', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $post)
    {
        $danhMucs = Category::all();
        $data = Post::query()
            ->join('media', 'posts.id', 'media.mime_id')
            ->where('media.mime_type', 'post')
            ->select('posts.*', 'media.url as image')
            ->find($post);
        return view(self::PATH_VIEW . __FUNCTION__, compact('danhMucs', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, String $post)
    {
        $data = Post::query()
            ->join('media', 'posts.id', 'media.mime_id')
            ->where('media.mime_type', 'post')
            ->select('posts.*', 'media.url as image')
            ->findOrFail($post);
        $image = '';
        try {
            DB::transaction(function () use ($data, $request) {
                if ($request->hasFile("image")) {
                    $image = Storage::put('', $request->file("image"));
                    if ($data->image) {
                        Storage::delete($data->image);
                    }
                } else {
                    $image = $data->image;
                }
                $slug = Str::slug(ASCII::to_ascii($request->title));
                Post::query()
                    ->where('id', $data->id)
                    ->update([
                        'title' => $request->title,
                        'slug' => $slug,
                        'description' => $request->description,
                        'content' => $request->content,
                        'category_id' => $request->category_id,
                        'is_active' => $request->is_active,
                        'is_trending' => $request->has('is_trending'),
                        'is_popular' => $request->has('is_popular')
                    ]);
                Media::query()
                    ->where('mime_id', $data->id)
                    ->where('mime_type', 'post')
                    ->update(['url' => $image]);
            }, 3);
            return back()->with('success', 'Thao tác thành công!');
        } catch (Exception $exception) {
            if (Storage::exists($image)) {
                Storage::delete($image);
            }
            return back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $post)
    {
        try {
            DB::transaction(function () use ($post) {
                Post::query()->find($post)->update([
                    'is_active' => 0
                ]);
            });

            return back()->with('success', 'Thao tác thành công!');
        } catch (Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    public function postRecycle()
    {
        $posts = Post::where('is_active', 0)->orderByDesc('id')->paginate(10);
        return view(self::PATH_VIEW . 'recycle', compact('posts'));
    }
    public function postRestore(String $post)
    {
        try {
            DB::transaction(function () use ($post) {
                Post::query()->find($post)->update([
                    'is_active' => 1
                ]);
            });

            return back()->with('success', 'Thao tác thành công!');
        } catch (Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }
}
