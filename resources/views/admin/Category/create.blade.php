@extends('admin.layouts.master')

@section('title')
    Thêm danh mục
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Thêm mới danh mục</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Danh mục</a></li>
                                <li class="breadcrumb-item active">Thêm mới danh mục</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <form id="createproduct-form" autocomplete="off" class="needs-validation" method="POST"
                action="{{ route('admin.danh-muc.store') }}">
                @csrf

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Tên danh mục</label>
                                    <input type="text" class="form-control" id="product-title-input" value=""
                                        placeholder="Thêm tiêu đề" name="name">
                                </div>
                            </div>
                        </div>
                        <div class="text-end mb-3">
                            <button type="submit" class="btn btn-success w-sm">Thêm mới</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
