@extends('admin.layouts.master')

@section('title')
    Thêm bài viết
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Thêm mới bài viết</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Bài viết</a></li>
                                <li class="breadcrumb-item active">Thêm mới bài viết</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <form id="createproduct-form" autocomplete="off" class="needs-validation" novalidate>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Mã bài viết</label>
                                    <input type="text" class="form-control" id="product-title-input" value="bai-viet-1"
                                        disabled>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Tiêu đề</label>
                                    <input type="text" class="form-control" id="product-title-input" value=""
                                        placeholder="Thêm tiêu đề" required>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->


                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div>
                                        <label class="form-label" for="meta-description-input">Mô tả bài viết</label>
                                        <textarea class="form-control" id="meta-description-input" placeholder="Nhập mô tả" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div>
                                        <label class="form-label" for="meta-description-input">Nội dung bài viết</label>
                                        <textarea class="form-control" id="meta-description-input" placeholder="Nhập nội dung" rows="9"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                        <div class="text-end mb-3">
                            <button type="submit" class="btn btn-success w-sm">Submit</button>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body d-flex justify-content-around">
                                <div class="form-check form-switch form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" name="1"
                                        value="1" id="1" checked>
                                    <label class="form-check-label" for="1">Hiển thị</label>
                                </div>
                                <div class="form-check form-switch form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" name="1"
                                        value="1" id="1">
                                    <label class="form-check-label" for="1">Nổi bật</label>
                                </div>
                                <div class="form-check form-switch form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" name="1"
                                        value="1" id="1">
                                    <label class="form-check-label" for="1">abc</label>
                                </div>
                            </div>

                            <!-- end card body -->
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Danh mục</h5>
                            </div>
                            <div class="card-body">
                                <select class="form-select" id="choices-category-input" name="choices-category-input"
                                    data-choices data-choices-search-false>
                                    <option value="Appliances">Appliances</option>
                                    <option value="Automotive Accessories">Automotive Accessories</option>
                                    <option value="Electronics">Electronics</option>
                                    <option value="Fashion">Fashion</option>
                                    <option value="Furniture">Furniture</option>
                                    <option value="Grocery">Grocery</option>
                                    <option value="Kids">Kids</option>
                                    <option value="Watches">Watches</option>
                                </select>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
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
                                                <input class="form-control d-none" value=""
                                                    id="product-image-input" type="file"
                                                    accept="image/png, image/gif, image/jpeg">
                                            </div>
                                            <div class="avatar-lg">
                                                <div class="avatar-title bg-light rounded">
                                                    <img src="" id="product-img" class="avatar-md h-auto" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Thẻ</h5>
                            </div>
                            <div class="card-body">
                                <div class="hstack gap-3 align-items-start">
                                    <div class="flex-grow-1">
                                        <input class="form-control" data-choices data-choices-multiple-remove="true"
                                            placeholder="Enter tags" type="text" value="Cotton" />
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </form>

        </div>
        <!-- container-fluid -->
    </div>
@endsection
