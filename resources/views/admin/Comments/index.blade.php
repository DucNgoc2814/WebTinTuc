@extends('admin.layouts.master')

@section('title')
    Danh sách bình luận
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Danh sách bình luận</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Bình luận</a></li>
                                <li class="breadcrumb-item active">Danh sách</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12 col-lg-11">
                    <div>
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="row g-4">
                                    <div class="col-sm">
                                        <div class="d-flex justify-content-sm-end">
                                            <div class="search-box ms-2">
                                                <input type="text" class="form-control" id="searchProductList"
                                                    placeholder="Tìm bình luận...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $index = 1;
                            @endphp
                            <div class="card-body">
                                <div class="tab-content text-center">
                                    <div class="tab-pane active" id="productnav-all" role="tabpanel">
                                        <div id="table-product-list-all1" class="table-card gridjs-border-none">
                                            <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                                <div class="gridjs-wrapper" style="height: auto;">
                                                    <table role="grid" class="gridjs-table" style="height: auto;">
                                                        <thead class="gridjs-thead">
                                                            <tr class="gridjs-tr">
                                                                <th data-column-id="#" class="gridjs-th text-muted"
                                                                    tabindex="0" style="width: 140px;">
                                                                    <div class="gridjs-th">#</div>
                                                                </th>
                                                                <th data-column-id="users" class="gridjs-th text-muted"
                                                                    tabindex="0" style="width: 105px;">
                                                                    <div class="gridjs-th">Bài viết</div>
                                                                </th>
                                                                <th data-column-id="published" class="gridjs-th text-muted"
                                                                    tabindex="0" style="width: 150px;">
                                                                    <div class="gridjs-th">Nội dung</div>
                                                                </th>
                                                                <th data-column-id="published" class="gridjs-th text-muted"
                                                                    tabindex="0" style="width: 150px;">
                                                                    <div class="gridjs-th">Người đăng</div>
                                                                </th>
                                                                <th data-column-id="published" class="gridjs-th text-muted"
                                                                    tabindex="0" style="width: 150px;">
                                                                    <div class="gridjs-th">Ngày đăng</div>
                                                                </th>
                                                                <th data-column-id="action"
                                                                    class="gridjs-th text-center p-0" tabindex="0"
                                                                    style="width: 80px;">
                                                                    <div class="gridjs-th">Thao tác</div>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="gridjs-tbody">
                                                            @foreach ($comments as $comment)
                                                                <tr class="gridjs-tr">
                                                                    <td data-column-id="#" class="gridjs-td"><span>
                                                                            <div class="text-body">
                                                                                {{ $index++ }}
                                                                            </div>
                                                                        </span></td>
                                                                    <td data-column-id="stock" class="gridjs-td">
                                                                        {{ $comment->post->title }}
                                                                    </td>
                                                                    <td data-column-id="published" class="gridjs-td">
                                                                        <span>{{ $comment->content }}<small
                                                                                class="text-muted ms-1">
                                                                            </small></span>
                                                                    </td>
                                                                    <td data-column-id="stock" class="gridjs-td">
                                                                        {{ $comment->user->name }}
                                                                    </td>
                                                                    <td data-column-id="stock" class="gridjs-td">
                                                                        {{ $comment->created_at->format('H:i:s d-m-Y') }}
                                                                    </td>
                                                                    <td data-column-id="action"
                                                                        class="gridjs-td text-center"><span>
                                                                            <div class="dropdown"><button
                                                                                    class="btn btn-soft-secondary btn-sm dropdown"
                                                                                    type="button" data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"><i
                                                                                        class="ri-more-fill"></i></button>
                                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                                    <li>
                                                                                        <form
                                                                                            action="{{ route('admin.binh-luan.destroy', $comment) }}"
                                                                                            method="post">
                                                                                            @method('DELETE')
                                                                                            @csrf

                                                                                            <button
                                                                                                class="dropdown-item remove-list"
                                                                                                type="submit"
                                                                                                onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?')">
                                                                                                <i
                                                                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                                Xóa
                                                                                            </button>
                                                                                        </form>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div id="gridjs-temp" class="gridjs-temp"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('list-js')
    <script src="{{ asset('theme/admin/assets/libs/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('theme/admin/assets/libs/wnumb/wNumb.min.js') }}"></script>

    <!-- gridjs js -->
    <script src="{{ asset('theme/admin/assets/libs/gridjs/gridjs.umd.js') }}"></script>
    <script src="https://unpkg.com/gridjs/plugins/selection/dist/selection.umd.js"></script>
    <!-- ecommerce product list -->
    <script src="{{ asset('theme/admin/assets/js/pages/ecommerce-product-list.init.js') }}"></script>
@endsection

@section('list-css')
    <!-- nouisliderribute css -->
    <link rel="stylesheet" href="{{ asset('theme/admin/assets/libs/nouislider/nouislider.min.css') }}">

    <!-- gridjs css -->
    <link rel="stylesheet" href="{{ asset('theme/admin/assets/libs/gridjs/theme/mermaid.min.css') }}">
@endsection
