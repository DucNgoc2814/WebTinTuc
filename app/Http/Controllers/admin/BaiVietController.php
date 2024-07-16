<?php

namespace App\Http\Controllers\admin;

use App\Models\BaiViet;
use App\Http\Requests\StoreBaiVietRequest;
use App\Http\Requests\UpdateBaiVietRequest;
use App\Http\Controllers\Controller;

class BaiVietController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PATH_VIEW = 'admin.BaiViet.';

    public function index()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
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
    public function store(StoreBaiVietRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BaiViet $baiViet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BaiViet $baiViet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBaiVietRequest $request, BaiViet $baiViet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BaiViet $baiViet)
    {
        //
    }
}
