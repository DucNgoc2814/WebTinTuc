<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use voku\helper\ASCII;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PATH_VIEW = 'admin.category.';

    public function index()
    {
        $categories = Category::where('is_active', 1)->orderByDesc('id')->paginate(10);
        // dd($categories);
        return view(self::PATH_VIEW . __FUNCTION__, compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $category = $request->validated();

        try {
            $slug = Str::slug(ASCII::to_ascii($category->name));

            Category::create([
                'name' => $category->name,
                'slug' => $slug,
                'is_active' => '1'
            ]);

            return redirect()
                ->route('admin.danh-muc.index')
                ->with('success', 'Thao tác thành công!');
        } catch (Exception $exception) {

            return back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $category)
    {
        $category = Category::query()->findOrFail($category);
        return view(self::PATH_VIEW . __FUNCTION__, compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, String $category)
    {

        try {
            $slug = Str::slug(ASCII::to_ascii($request->name));

            Category::query()
                ->where('id', $category)
                ->update([
                    'name' => $request->name,
                    'slug' => $slug,
                ]);

            return redirect()
                ->route('admin.danh-muc.index')
                ->with('success', 'Thao tác thành công!');
        } catch (Exception $exception) {

            return back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $category)
    {
        try {
            Category::query()->find($category)->update([
                'is_active' => 0
            ]);

            return back()->with('success', 'Thao tác thành công!');
        } catch (Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    public function postRecycle()
    {
        $posts = Category::where('is_active', 0)->orderByDesc('id')->paginate(10);
        return view(self::PATH_VIEW . 'recycle', compact('posts'));
    }
    public function postRestore(String $category)
    {
        try {
            Category::query()->find($category)->update([
                'is_active' => 1
            ]);

            return back()->with('success', 'Thao tác thành công!');
        } catch (Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }
}
