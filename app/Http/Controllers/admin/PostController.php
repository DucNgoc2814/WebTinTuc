<?php

namespace App\Http\Controllers\admin;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Media;
use Exception;
use Illuminate\Http\Request;
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
        $search = request()->search;

        $posts = Post::query()
            ->where('posts.is_active', 1)
            ->where('title', 'LIKE', "%{$search}%")
            ->orderByDesc('posts.id')
            ->paginate(10)->appends(request()->except('page'));
        // ->appends(request()->except('page')); khi search thì nó sẽ giữ lại các tham số còn lại
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



    public function store(StorePostRequest $request)
    {
        $image = '';
        $validatedData = $request->validated();
        try {
            DB::transaction(function () use ($validatedData, $request, $image) {
                if ($request->hasFile('image')) {
                    $image = Storage::put('', $request->file("image"));
                }
                $slug = Str::slug($request['title']);
                $post = Post::create([
                    'user_id' => auth()->user()->id,
                    'title' => $validatedData['title'],
                    'slug' => $slug,
                    'description' => $validatedData['description'],
                    'content' => $validatedData['content'],
                    'category_id' => $request['category_id'],
                    'is_active' => $request->has('is_active'),
                    'is_trending' => $request->has('is_trending'),
                    'is_popular' => $request->has('is_popular'),
                ]);
                if ($image) {
                    Media::query()->create([
                        'url' => $image,
                        'mime_id' => $post->id,
                        'mime_type' => 'post',
                    ]);
                }
            }, 3);

            return redirect()->route('admin.bai-viet.index')
                ->with('success', 'Thao tác thành công!');
        } catch (Exception $exception) {
            if ($image && Storage::exists($image)) {
                Storage::delete($image);
            }
            // dd($exception->getMessage());
            return back()->with('error', $exception->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(String $slug)
    {
        $post = Post::query()
            ->join('media', 'posts.id', 'media.mime_id')
            ->where('media.mime_type', 'post')
            ->select('posts.*', 'media.url as image')
            ->where('slug', $slug)
            ->first();

        $comments = Comment::where('post_id', $post->id)->get();

        return view('client.bai-viet-chi-tiet', compact('post', 'comments'));
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
            $post = Post::query()->find($post)->update([
                'is_active' => 0
            ]);

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
            Post::query()->find($post)->update([
                'is_active' => 1
            ]);

            return back()->with('success', 'Thao tác thành công!');
        } catch (Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }
}
