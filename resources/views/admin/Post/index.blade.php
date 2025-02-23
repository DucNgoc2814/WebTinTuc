@extends('admin.layouts.master')

@section('title')
    Danh sách bài viết
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Danh sách bài viết</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Bài viết</a></li>
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
                                    <div class="col-sm-auto">
                                        <div>
                                            <a href="{{ route('admin.bai-viet.create') }}" class="btn btn-success"
                                                id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i>Thêm bài
                                                viết</a>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="d-flex justify-content-sm-end">
                                            <form class="search-box ms-2" method="GET" action="{{ route('admin.bai-viet.index') }}">
                                                <input type="text" class="form-control" id="searchProductList" name="search"
                                                    placeholder="Tìm bài viết...">
                                                <i class="ri-search-line search-icon"></i>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                                                                    <div class="gridjs-th">Mã bài viết</div>
                                                                </th>
                                                                <th data-column-id="product" class="gridjs-th text-muted"
                                                                    tabindex="0" style="width: 300px;">
                                                                    <div class="gridjs-th">Tiêu đề</div>
                                                                </th>
                                                                <th data-column-id="users" class="gridjs-th text-muted"
                                                                    tabindex="0" style="width: 105px;">
                                                                    <div class="gridjs-th">Danh mục</div>
                                                                </th>
                                                                <th data-column-id="views" class="gridjs-th text-muted"
                                                                    tabindex="0" style="width: 84px;">
                                                                    <div class="gridjs-th">Lượt xem</div>
                                                                </th>
                                                                <th data-column-id="rating" class="gridjs-th text-muted"
                                                                    tabindex="0" style="width: 105px;">
                                                                    <div class="gridjs-th">Người đăng</div>
                                                                </th>
                                                                <th data-column-id="published" class="gridjs-th text-muted"
                                                                    tabindex="0" style="width: 150px;">
                                                                    <div class="gridjs-th">Ngày đăng</div>
                                                                </th>
                                                                <th data-column-id="published" class="gridjs-th text-muted"
                                                                    tabindex="0" style="width: 75px;">
                                                                    <div class="gridjs-th">Nổi bật</div>
                                                                </th>
                                                                <th data-column-id="published" class="gridjs-th text-muted"
                                                                    tabindex="0" style="width: 85px;">
                                                                    <div class="gridjs-th">Phổ biến</div>
                                                                </th>
                                                                <th data-column-id="action"
                                                                    class="gridjs-th text-center p-0" tabindex="0"
                                                                    style="width: 80px;">
                                                                    <div class="gridjs-th">Thao tác</div>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="gridjs-tbody">
                                                            @foreach ($posts as $post)
                                                                <tr class="gridjs-tr">
                                                                    <td data-column-id="#" class="gridjs-td"><span>
                                                                            <div class="text-body">
                                                                                {{ $post->slug }}
                                                                            </div>
                                                                        </span></td>
                                                                    <td data-column-id="product" class="gridjs-td"><span>
                                                                            <h5 class="fs-14 mb-1"><a
                                                                                    href="{{ route('admin.bai-viet.show', $post->slug) }}"
                                                                                    class="text-body">{{ $post->title }}</a>
                                                                            </h5>
                                                                        </span></td>
                                                                    <td data-column-id="stock" class="gridjs-td">
                                                                        {{ $post->category->name }}</td>
                                                                    <td data-column-id="orders" class="gridjs-td">
                                                                        {{ $post->views }}</td>
                                                                    <td data-column-id="rating" class="gridjs-td">
                                                                        <span
                                                                            class="badge bg-light text-body fs-12 fw-medium">{{ $post->user->name }}</span>
                                                                    </td>
                                                                    <td data-column-id="published" class="gridjs-td">
                                                                        <span>{{ $post->created_at->format('d M, Y') }}<small
                                                                                class="text-muted ms-1">{{ $post->created_at->format('H:i') }}
                                                                            </small></span>
                                                                    </td>
                                                                    <td data-column-id="published" class="gridjs-td">
                                                                        <span class="badge bg-danger">không</span>
                                                                    </td>
                                                                    <td data-column-id="published" class="gridjs-td">
                                                                        <span class="badge bg-primary">có</span>
                                                                    </td>
                                                                    <td data-column-id="action" class="gridjs-td"><span>
                                                                            <div class="dropdown"><button
                                                                                    class="btn btn-soft-secondary btn-sm dropdown"
                                                                                    type="button"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"><i
                                                                                        class="ri-more-fill"></i></button>
                                                                                <ul
                                                                                    class="dropdown-menu dropdown-menu-end">
                                                                                    <li><a class="dropdown-item"
                                                                                            href="{{ route('admin.bai-viet.show', $post->slug) }}"><i
                                                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                            Xem</a></li>
                                                                                    <li><a class="dropdown-item edit-list"
                                                                                            data-edit-id="1"
                                                                                            href="{{ route('admin.bai-viet.edit', $post) }}"><i
                                                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                                            Sửa</a></li>
                                                                                    <li class="dropdown-divider"></li>
                                                                                    <li>
                                                                                        <form
                                                                                            action="{{ route('admin.bai-viet.destroy', $post) }}"
                                                                                            method="post">
                                                                                            @method('DELETE')
                                                                                            @csrf

                                                                                            <button
                                                                                                class="dropdown-item remove-list"
                                                                                                type="submit"
                                                                                                onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết này không?')">
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
                                                @if ($posts->hasPages())
                                                    <div class="gridjs-footer">
                                                        <div class="gridjs-pagination">
                                                            <div role="status" aria-live="polite" class="gridjs-summary"
                                                                title="Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}">
                                                                Hiển thị <b>{{ $posts->firstItem() }}</b> đến
                                                                <b>{{ $posts->lastItem() }}</b> của
                                                                <b>{{ $posts->total() }}</b> kết quả
                                                            </div>
                                                            <div class="gridjs-pages">
                                                                @if ($posts->onFirstPage())
                                                                    <button tabindex="0" role="button" disabled
                                                                        title="Previous" aria-label="Previous"
                                                                        class="">Trước</button>
                                                                @else
                                                                    <button tabindex="0" role="button"
                                                                        title="Previous" aria-label="Previous"
                                                                        class=""
                                                                        onclick="window.location='{{ $posts->previousPageUrl() }}'">Trước</button>
                                                                @endif

                                                                @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
                                                                    @if ($page == $posts->currentPage())
                                                                        <button tabindex="0" role="button"
                                                                            class="gridjs-currentPage"
                                                                            title="Page {{ $page }}"
                                                                            aria-label="Page {{ $page }}">{{ $page }}</button>
                                                                    @else
                                                                        <button tabindex="0" role="button"
                                                                            class=""
                                                                            title="Page {{ $page }}"
                                                                            aria-label="Page {{ $page }}"
                                                                            onclick="window.location='{{ $url }}'">{{ $page }}</button>
                                                                    @endif
                                                                @endforeach

                                                                @if ($posts->hasMorePages())
                                                                    <button tabindex="0" role="button" title="Next"
                                                                        aria-label="Next" class=""
                                                                        onclick="window.location='{{ $posts->nextPageUrl() }}'">Sau</button>
                                                                @else
                                                                    <button tabindex="0" role="button" disabled
                                                                        title="Next" aria-label="Next"
                                                                        class="">Sau</button>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif


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
