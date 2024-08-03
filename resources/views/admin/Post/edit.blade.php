@extends('admin.layouts.master')

@section('title')
    Sửa bài viết
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <form id="createproduct-form" autocomplete="off" class="needs-validation" method="POST"
                action="{{ route('admin.bai-viet.update', $data) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Tiêu đề</label>
                                    <input type="text" class="form-control" id="product-title-input"
                                        value="{{ $data->title }}" placeholder="Thêm tiêu đề" name="title">
                                </div>
                            </div>
                        </div>
                        <!-- end card -->


                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div>
                                        <label class="form-label" for="meta-description-input">Mô tả bài viết</label>
                                        <textarea class="form-control" id="meta-description-input" placeholder="Nhập mô tả" rows="3" name="description"> {{ $data->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div>
                                        <label class="form-label" for="meta-description-input">Nội dung bài viết</label>
                                        <textarea class="form-control" id="meta-description-input" placeholder="Nhập nội dung" rows="9" name="content">{{ $data->content }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                        <div class="text-end mb-3">
                            <button type="submit" class="btn btn-success w-sm">Cập nhật</button>
                        </div>
                    </div>
                    <!-- end col -->
                    @php
                        $is = [
                            'is_active' => $data->is_active,
                            'is_trending' => $data->is_trending,
                            'is_popular' => $data->is_popular,
                        ];
                    @endphp
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body d-flex justify-content-around">
                                @foreach ($is as $key => $value)
                                    @if ($value == 1)
                                        <div class="form-check form-switch form-switch">
                                            <input class="form-check-input" type="checkbox" name="{{ $key }}"
                                                value="1" id="{{ $key }}" checked>
                                            <label class="form-check-label" for="1">{{ $key }}</label>
                                        </div>
                                    @else
                                        <div class="form-check form-switch form-switch">
                                            <input class="form-check-input" type="checkbox" name="{{ $key }}"
                                                value="1" id="{{ $key }}">
                                            <label class="form-check-label" for="{{ $key }}">{{ $key }}</label>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                            <!-- end card body -->
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Danh mục</h5>
                            </div>
                            <div class="card-body">
                                <select class="form-select" id="choices-category-input" name="category_id" data-choices
                                    data-choices-search-false>
                                    @foreach ($danhMucs as $danhMuc)
                                        @if ($data->category_id == $danhMuc->id)
                                            <option value="{{ $danhMuc->id }}" selected>{{ $danhMuc->name }}</option>
                                        @endif
                                        <option value="{{ $danhMuc->id }}">{{ $danhMuc->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <label class="form-label" for="meta-description-input">Ảnh bài viết</label>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <p class="text-muted">Thêm ảnh bài viết</p>
                                    <div class="text-center">
                                        <div class="position-relative d-inline-block">
                                            <div class="position-absolute top-100 start-100 translate-middle">
                                                <label for="product-image-input" class="mb-0" data-bs-toggle="tooltip"
                                                    data-bs-placement="right" title="Select Image">
                                                    <div class="avatar-xs">
                                                        <div
                                                            class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                            <i class="ri-image-fill"></i>
                                                        </div>
                                                    </div>
                                                </label>
                                                <input class="form-control d-none" value="" id="product-image-input"
                                                    type="file" accept="image/png, image/gif, image/jpeg" name="image">
                                            </div>
                                            <div class="avatar-lg">
                                                <div class="avatar-title bg-light rounded">
                                                    <img src="{{ \Storage::url($data->image) }}" id="product-img"
                                                        class="avatar-md h-auto" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </form>

        </div>
        <!-- container-fluid -->
    </div>

    <script>
        document.getElementById('product-image-input').addEventListener('change', function(event) {
            var output = document.getElementById('product-img');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src)
            }
        });
    </script>
@endsection
