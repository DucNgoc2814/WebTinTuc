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
                                                id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i>Thêm bài viết</a>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="d-flex justify-content-sm-end">
                                            <div class="search-box ms-2">
                                                <input type="text" class="form-control" id="searchProductList"
                                                    placeholder="Tìm bài viết...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
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
                                                                <th data-column-id="#"
                                                                    class="gridjs-th text-muted"
                                                                    tabindex="0" style="width: 140px;">
                                                                    <div class="gridjs-th">Mã bài viết</div>
                                                                </th>
                                                                <th data-column-id="product"
                                                                    class="gridjs-th text-muted"
                                                                    tabindex="0" style="width: 454px;">
                                                                    <div class="gridjs-th">Bài viết</div>
                                                                </th>
                                                                <th data-column-id="users"
                                                                    class="gridjs-th text-muted"
                                                                    tabindex="0" style="width: 105px;">
                                                                    <div class="gridjs-th">Danh mục</div>
                                                                </th>
                                                                <th data-column-id="views"
                                                                    class="gridjs-th text-muted"
                                                                    tabindex="0" style="width: 84px;">
                                                                    <div class="gridjs-th">Lượt xem</div>
                                                                </th>
                                                                <th data-column-id="rating"
                                                                    class="gridjs-th text-muted"
                                                                    tabindex="0" style="width: 105px;">
                                                                    <div class="gridjs-th">Đánh giá</div>
                                                                </th>
                                                                <th data-column-id="published"
                                                                    class="gridjs-th text-muted"
                                                                    tabindex="0" style="width: 220px;">
                                                                    <div class="gridjs-th">Ngày đăng</div>
                                                                </th>
                                                                <th data-column-id="action"
                                                                    class="gridjs-th text-center p-0"
                                                                    tabindex="0" style="width: 80px;">
                                                                    <div class="gridjs-th">Thao tác</div>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="gridjs-tbody">
                                                            <tr class="gridjs-tr">
                                                                <td data-column-id="#" class="gridjs-td"><span>
                                                                        <div class="text-body">
                                                                            abcxyz
                                                                        </div>
                                                                    </span></td>
                                                                <td data-column-id="product" class="gridjs-td"><span>
                                                                                <h5 class="fs-14 mb-1"><a
                                                                                        href="apps-ecommerce-product-details.html"
                                                                                        class="text-body">Half Sleeve Round
                                                                                        Neck T-Shirts</a></h5>
                                                                            </div>
                                                                        </div>
                                                                    </span></td>
                                                                <td data-column-id="stock" class="gridjs-td">12</td>
                                                                <td data-column-id="orders" class="gridjs-td">48</td>
                                                                <td data-column-id="rating" class="gridjs-td"><span><span
                                                                            class="badge bg-light text-body fs-12 fw-medium"><i
                                                                                class="mdi mdi-star text-warning me-1"></i>4.2</span></span>
                                                                </td>
                                                                <td data-column-id="published" class="gridjs-td"><span>12
                                                                        Oct, 2021<small class="text-muted ms-1">10:05
                                                                            AM</small></span></td>
                                                                <td data-column-id="action" class="gridjs-td"><span>
                                                                        <div class="dropdown"><button
                                                                                class="btn btn-soft-secondary btn-sm dropdown"
                                                                                type="button" data-bs-toggle="dropdown"
                                                                                aria-expanded="false"><i
                                                                                    class="ri-more-fill"></i></button>
                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                                <li><a class="dropdown-item"
                                                                                        href="apps-ecommerce-product-details.html"><i
                                                                                            class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                        View</a></li>
                                                                                <li><a class="dropdown-item edit-list"
                                                                                        data-edit-id="1"
                                                                                        href="apps-ecommerce-add-product.html"><i
                                                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                                        Edit</a></li>
                                                                                <li class="dropdown-divider"></li>
                                                                                <li><a class="dropdown-item remove-list"
                                                                                        href="#" data-id="1"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#removeItemModal"><i
                                                                                            class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                        Delete</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </span></td>
                                                            </tr>
                                                            <tr class="gridjs-tr">
                                                                <td data-column-id="#" class="gridjs-td"><span>
                                                                        <div class="text-body">
                                                                            abcxyz
                                                                        </div>
                                                                    </span></td>
                                                                <td data-column-id="product" class="gridjs-td"><span>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="flex-grow-1">
                                                                                <h5 class="fs-14 mb-1"><a
                                                                                        href="apps-ecommerce-product-details.html"
                                                                                        class="text-body">Urban Ladder
                                                                                        Pashe Chair</a></h5>
                                                                            </div>
                                                                        </div>
                                                                    </span></td>
                                                                <td data-column-id="stock" class="gridjs-td">Admin</td>
                                                                <td data-column-id="orders" class="gridjs-td">30</td>
                                                                <td data-column-id="rating" class="gridjs-td"><span><span
                                                                            class="badge bg-light text-body fs-12 fw-medium"><i
                                                                                class="mdi mdi-star text-warning me-1"></i>4.3</span></span>
                                                                </td>
                                                                <td data-column-id="published" class="gridjs-td"><span>06
                                                                        Jan, 2021<small class="text-muted ms-1">01:31
                                                                            PM</small></span></td>
                                                                <td data-column-id="action" class="gridjs-td"><span>
                                                                        <div class="dropdown"><button
                                                                                class="btn btn-soft-secondary btn-sm dropdown"
                                                                                type="button" data-bs-toggle="dropdown"
                                                                                aria-expanded="false"><i
                                                                                    class="ri-more-fill"></i></button>
                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                                <li><a class="dropdown-item"
                                                                                        href="apps-ecommerce-product-details.html"><i
                                                                                            class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                        View</a></li>
                                                                                <li><a class="dropdown-item edit-list"
                                                                                        data-edit-id="2"
                                                                                        href="apps-ecommerce-add-product.html"><i
                                                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                                        Edit</a></li>
                                                                                <li class="dropdown-divider"></li>
                                                                                <li><a class="dropdown-item remove-list"
                                                                                        href="#" data-id="2"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#removeItemModal"><i
                                                                                            class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                        Delete</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </span></td>
                                                            </tr>
                                                            <tr class="gridjs-tr">
                                                                <td data-column-id="#" class="gridjs-td"><span>
                                                                        <div class="text-body">
                                                                            abcxyz
                                                                        </div>
                                                                    </span></td>
                                                                <td data-column-id="product" class="gridjs-td"><span>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="flex-grow-1">
                                                                                <h5 class="fs-14 mb-1"><a
                                                                                        href="apps-ecommerce-product-details.html"
                                                                                        class="text-body">350 ml Glass
                                                                                        Grocery Container</a></h5>
                                                                            </div>
                                                                        </div>
                                                                    </span></td>
                                                                <td data-column-id="stock" class="gridjs-td">10</td>
                                                                <td data-column-id="orders" class="gridjs-td">48</td>
                                                                <td data-column-id="rating" class="gridjs-td"><span><span
                                                                            class="badge bg-light text-body fs-12 fw-medium"><i
                                                                                class="mdi mdi-star text-warning me-1"></i>4.5</span></span>
                                                                </td>
                                                                <td data-column-id="published" class="gridjs-td"><span>26
                                                                        Mar, 2021<small class="text-muted ms-1">11:40
                                                                            AM</small></span></td>
                                                                <td data-column-id="action" class="gridjs-td"><span>
                                                                        <div class="dropdown"><button
                                                                                class="btn btn-soft-secondary btn-sm dropdown"
                                                                                type="button" data-bs-toggle="dropdown"
                                                                                aria-expanded="false"><i
                                                                                    class="ri-more-fill"></i></button>
                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                                <li><a class="dropdown-item"
                                                                                        href="apps-ecommerce-product-details.html"><i
                                                                                            class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                        View</a></li>
                                                                                <li><a class="dropdown-item edit-list"
                                                                                        data-edit-id="3"
                                                                                        href="apps-ecommerce-add-product.html"><i
                                                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                                        Edit</a></li>
                                                                                <li class="dropdown-divider"></li>
                                                                                <li><a class="dropdown-item remove-list"
                                                                                        href="#" data-id="3"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#removeItemModal"><i
                                                                                            class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                        Delete</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </span></td>
                                                            </tr>
                                                            <tr class="gridjs-tr">
                                                                <td data-column-id="#" class="gridjs-td"><span>
                                                                        <div class="text-body">
                                                                            abcxyz
                                                                        </div>
                                                                    </span></td>
                                                                <td data-column-id="product" class="gridjs-td"><span>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="flex-grow-1">
                                                                                <h5 class="fs-14 mb-1"><a
                                                                                        href="apps-ecommerce-product-details.html"
                                                                                        class="text-body">Fabric Dual Tone
                                                                                        Living Room Chair</a></h5>
                                                                            </div>
                                                                        </div>
                                                                    </span></td>
                                                                <td data-column-id="stock" class="gridjs-td">15</td>
                                                                <td data-column-id="orders" class="gridjs-td">40</td>
                                                                <td data-column-id="rating" class="gridjs-td"><span><span
                                                                            class="badge bg-light text-body fs-12 fw-medium"><i
                                                                                class="mdi mdi-star text-warning me-1"></i>4.2</span></span>
                                                                </td>
                                                                <td data-column-id="published" class="gridjs-td"><span>19
                                                                        Apr, 2021<small class="text-muted ms-1">02:51
                                                                            PM</small></span></td>
                                                                <td data-column-id="action" class="gridjs-td"><span>
                                                                        <div class="dropdown"><button
                                                                                class="btn btn-soft-secondary btn-sm dropdown"
                                                                                type="button" data-bs-toggle="dropdown"
                                                                                aria-expanded="false"><i
                                                                                    class="ri-more-fill"></i></button>
                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                                <li><a class="dropdown-item"
                                                                                        href="apps-ecommerce-product-details.html"><i
                                                                                            class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                        View</a></li>
                                                                                <li><a class="dropdown-item edit-list"
                                                                                        data-edit-id="4"
                                                                                        href="apps-ecommerce-add-product.html"><i
                                                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                                        Edit</a></li>
                                                                                <li class="dropdown-divider"></li>
                                                                                <li><a class="dropdown-item remove-list"
                                                                                        href="#" data-id="4"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#removeItemModal"><i
                                                                                            class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                        Delete</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </span></td>
                                                            </tr>
                                                            <tr class="gridjs-tr">
                                                                <td data-column-id="#" class="gridjs-td"><span>
                                                                        <div class="text-body">
                                                                            abcxyz
                                                                        </div>
                                                                    </span></td>
                                                                <td data-column-id="product" class="gridjs-td"><span>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="flex-grow-1">
                                                                                <h5 class="fs-14 mb-1"><a
                                                                                        href="apps-ecommerce-product-details.html"
                                                                                        class="text-body">Crux Motorsports
                                                                                        Helmet</a></h5>
                                                                            </div>
                                                                        </div>
                                                                    </span></td>
                                                                <td data-column-id="stock" class="gridjs-td">08</td>
                                                                <td data-column-id="orders" class="gridjs-td">55</td>
                                                                <td data-column-id="rating" class="gridjs-td"><span><span
                                                                            class="badge bg-light text-body fs-12 fw-medium"><i
                                                                                class="mdi mdi-star text-warning me-1"></i>4.4</span></span>
                                                                </td>
                                                                <td data-column-id="published" class="gridjs-td"><span>30
                                                                        Mar, 2021<small class="text-muted ms-1">09:42
                                                                            AM</small></span></td>
                                                                <td data-column-id="action" class="gridjs-td"><span>
                                                                        <div class="dropdown"><button
                                                                                class="btn btn-soft-secondary btn-sm dropdown"
                                                                                type="button" data-bs-toggle="dropdown"
                                                                                aria-expanded="false"><i
                                                                                    class="ri-more-fill"></i></button>
                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                                <li><a class="dropdown-item"
                                                                                        href="apps-ecommerce-product-details.html"><i
                                                                                            class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                        View</a></li>
                                                                                <li><a class="dropdown-item edit-list"
                                                                                        data-edit-id="5"
                                                                                        href="apps-ecommerce-add-product.html"><i
                                                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                                        Edit</a></li>
                                                                                <li class="dropdown-divider"></li>
                                                                                <li><a class="dropdown-item remove-list"
                                                                                        href="#" data-id="5"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#removeItemModal"><i
                                                                                            class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                        Delete</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </span></td>
                                                            </tr>
                                                            <tr class="gridjs-tr">
                                                                <td data-column-id="#" class="gridjs-td"><span>
                                                                        <div class="text-body">
                                                                            abcxyz
                                                                        </div>
                                                                    </span></td>
                                                                <td data-column-id="product" class="gridjs-td"><span>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="flex-grow-1">
                                                                                <h5 class="fs-14 mb-1"><a
                                                                                        href="apps-ecommerce-product-details.html"
                                                                                        class="text-body">Half Sleeve
                                                                                        T-Shirts (Blue)</a></h5>
                                                                            </div>
                                                                        </div>
                                                                    </span></td>
                                                                <td data-column-id="stock" class="gridjs-td">15</td>
                                                                <td data-column-id="orders" class="gridjs-td">48</td>
                                                                <td data-column-id="rating" class="gridjs-td"><span><span
                                                                            class="badge bg-light text-body fs-12 fw-medium"><i
                                                                                class="mdi mdi-star text-warning me-1"></i>4.2</span></span>
                                                                </td>
                                                                <td data-column-id="published" class="gridjs-td"><span>12
                                                                        Oct, 2021<small class="text-muted ms-1">04:55
                                                                            PM</small></span></td>
                                                                <td data-column-id="action" class="gridjs-td"><span>
                                                                        <div class="dropdown"><button
                                                                                class="btn btn-soft-secondary btn-sm dropdown"
                                                                                type="button" data-bs-toggle="dropdown"
                                                                                aria-expanded="false"><i
                                                                                    class="ri-more-fill"></i></button>
                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                                <li><a class="dropdown-item"
                                                                                        href="apps-ecommerce-product-details.html"><i
                                                                                            class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                        View</a></li>
                                                                                <li><a class="dropdown-item edit-list"
                                                                                        data-edit-id="6"
                                                                                        href="apps-ecommerce-add-product.html"><i
                                                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                                        Edit</a></li>
                                                                                <li class="dropdown-divider"></li>
                                                                                <li><a class="dropdown-item remove-list"
                                                                                        href="#" data-id="6"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#removeItemModal"><i
                                                                                            class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                        Delete</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </span></td>
                                                            </tr>
                                                            <tr class="gridjs-tr">
                                                                <td data-column-id="#" class="gridjs-td"><span>
                                                                        <div class="text-body">
                                                                            abcxyz
                                                                        </div>
                                                                    </span></td>
                                                                <td data-column-id="product" class="gridjs-td"><span>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="flex-grow-1">
                                                                                <h5 class="fs-14 mb-1"><a
                                                                                        href="apps-ecommerce-product-details.html"
                                                                                        class="text-body">Noise Evolve
                                                                                        Smartwatch</a></h5>
                                                                            </div>
                                                                        </div>
                                                                    </span></td>
                                                                <td data-column-id="stock" class="gridjs-td">12</td>
                                                                <td data-column-id="orders" class="gridjs-td">45</td>
                                                                <td data-column-id="rating" class="gridjs-td"><span><span
                                                                            class="badge bg-light text-body fs-12 fw-medium"><i
                                                                                class="mdi mdi-star text-warning me-1"></i>4.3</span></span>
                                                                </td>
                                                                <td data-column-id="published" class="gridjs-td"><span>15
                                                                        May, 2021<small class="text-muted ms-1">03:40
                                                                            PM</small></span></td>
                                                                <td data-column-id="action" class="gridjs-td"><span>
                                                                        <div class="dropdown"><button
                                                                                class="btn btn-soft-secondary btn-sm dropdown"
                                                                                type="button" data-bs-toggle="dropdown"
                                                                                aria-expanded="false"><i
                                                                                    class="ri-more-fill"></i></button>
                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                                <li><a class="dropdown-item"
                                                                                        href="apps-ecommerce-product-details.html"><i
                                                                                            class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                        View</a></li>
                                                                                <li><a class="dropdown-item edit-list"
                                                                                        data-edit-id="7"
                                                                                        href="apps-ecommerce-add-product.html"><i
                                                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                                        Edit</a></li>
                                                                                <li class="dropdown-divider"></li>
                                                                                <li><a class="dropdown-item remove-list"
                                                                                        href="#" data-id="7"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#removeItemModal"><i
                                                                                            class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                        Delete</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </span></td>
                                                            </tr>
                                                            <tr class="gridjs-tr">
                                                                <td data-column-id="#" class="gridjs-td"><span>
                                                                        <div class="text-body">
                                                                            abcxyz
                                                                        </div>
                                                                    </span></td>
                                                                <td data-column-id="product" class="gridjs-td"><span>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="flex-grow-1">
                                                                                <h5 class="fs-14 mb-1"><a
                                                                                        href="apps-ecommerce-product-details.html"
                                                                                        class="text-body">Sweatshirt for
                                                                                        Men (Pink)</a></h5>
                                                                            </div>
                                                                        </div>
                                                                    </span></td>
                                                                <td data-column-id="stock" class="gridjs-td">20</td>
                                                                <td data-column-id="orders" class="gridjs-td">48</td>
                                                                <td data-column-id="rating" class="gridjs-td"><span><span
                                                                            class="badge bg-light text-body fs-12 fw-medium"><i
                                                                                class="mdi mdi-star text-warning me-1"></i>4.2</span></span>
                                                                </td>
                                                                <td data-column-id="published" class="gridjs-td"><span>21
                                                                        Jun, 2021<small class="text-muted ms-1">12:18
                                                                            PM</small></span></td>
                                                                <td data-column-id="action" class="gridjs-td"><span>
                                                                        <div class="dropdown"><button
                                                                                class="btn btn-soft-secondary btn-sm dropdown"
                                                                                type="button" data-bs-toggle="dropdown"
                                                                                aria-expanded="false"><i
                                                                                    class="ri-more-fill"></i></button>
                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                                <li><a class="dropdown-item"
                                                                                        href="apps-ecommerce-product-details.html"><i
                                                                                            class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                        View</a></li>
                                                                                <li><a class="dropdown-item edit-list"
                                                                                        data-edit-id="8"
                                                                                        href="apps-ecommerce-add-product.html"><i
                                                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                                        Edit</a></li>
                                                                                <li class="dropdown-divider"></li>
                                                                                <li><a class="dropdown-item remove-list"
                                                                                        href="#" data-id="8"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#removeItemModal"><i
                                                                                            class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                        Delete</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </span></td>
                                                            </tr>
                                                            <tr class="gridjs-tr">
                                                                <td data-column-id="#" class="gridjs-td"><span>
                                                                        <div class="text-body">
                                                                            abcxyz
                                                                        </div>
                                                                    </span></td>
                                                                <td data-column-id="product" class="gridjs-td"><span>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="flex-grow-1">
                                                                                <h5 class="fs-14 mb-1"><a
                                                                                        href="apps-ecommerce-product-details.html"
                                                                                        class="text-body">Reusable
                                                                                        Ecological Coffee Cup</a></h5>
                                                                            </div>
                                                                        </div>
                                                                    </span></td>
                                                                <td data-column-id="stock" class="gridjs-td">14</td>
                                                                <td data-column-id="orders" class="gridjs-td">55</td>
                                                                <td data-column-id="rating" class="gridjs-td"><span><span
                                                                            class="badge bg-light text-body fs-12 fw-medium"><i
                                                                                class="mdi mdi-star text-warning me-1"></i>4.3</span></span>
                                                                </td>
                                                                <td data-column-id="published" class="gridjs-td"><span>15
                                                                        Jan, 2021<small class="text-muted ms-1">10:29
                                                                            PM</small></span></td>
                                                                <td data-column-id="action" class="gridjs-td"><span>
                                                                        <div class="dropdown"><button
                                                                                class="btn btn-soft-secondary btn-sm dropdown"
                                                                                type="button" data-bs-toggle="dropdown"
                                                                                aria-expanded="false"><i
                                                                                    class="ri-more-fill"></i></button>
                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                                <li><a class="dropdown-item"
                                                                                        href="apps-ecommerce-product-details.html"><i
                                                                                            class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                        View</a></li>
                                                                                <li><a class="dropdown-item edit-list"
                                                                                        data-edit-id="9"
                                                                                        href="apps-ecommerce-add-product.html"><i
                                                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                                        Edit</a></li>
                                                                                <li class="dropdown-divider"></li>
                                                                                <li><a class="dropdown-item remove-list"
                                                                                        href="#" data-id="9"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#removeItemModal"><i
                                                                                            class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                        Delete</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </span></td>
                                                            </tr>
                                                            <tr class="gridjs-tr">
                                                                <td data-column-id="#" class="gridjs-td"><span>
                                                                        <div class="text-body">
                                                                            abcxyz>
                                                                        </div>
                                                                    </span></td>
                                                                <td data-column-id="product" class="gridjs-td"><span>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="flex-grow-1">
                                                                                <h5 class="fs-14 mb-1"><a
                                                                                        href="apps-ecommerce-product-details.html"
                                                                                        class="text-body">Travel Carrying
                                                                                        Pouch Bag</a></h5>
                                                                    </span></td>
                                                                <td data-column-id="stock" class="gridjs-td">20</td>
                                                                <td data-column-id="orders" class="gridjs-td">60</td>
                                                                <td data-column-id="rating" class="gridjs-td"><span><span
                                                                            class="badge bg-light text-body fs-12 fw-medium"><i
                                                                                class="mdi mdi-star text-warning me-1"></i>4.3</span></span>
                                                                </td>
                                                                <td data-column-id="published" class="gridjs-td"><span>15
                                                                        Jun, 2021<small class="text-muted ms-1">03:51
                                                                            PM</small></span></td>
                                                                <td data-column-id="action" class="gridjs-td"><span>
                                                                        <div class="dropdown"><button
                                                                                class="btn btn-soft-secondary btn-sm dropdown"
                                                                                type="button" data-bs-toggle="dropdown"
                                                                                aria-expanded="false"><i
                                                                                    class="ri-more-fill"></i></button>
                                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                                <li><a class="dropdown-item"
                                                                                        href="apps-ecommerce-product-details.html"><i
                                                                                            class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                        View</a></li>
                                                                                <li><a class="dropdown-item edit-list"
                                                                                        data-edit-id="10"
                                                                                        href="apps-ecommerce-add-product.html"><i
                                                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                                        Edit</a></li>
                                                                                <li class="dropdown-divider"></li>
                                                                                <li><a class="dropdown-item remove-list"
                                                                                        href="#" data-id="10"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#removeItemModal"><i
                                                                                            class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                        Delete</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="gridjs-footer">
                                                    <div class="gridjs-pagination">
                                                        <div role="status" aria-live="polite" class="gridjs-summary"
                                                            title="Page 1 of 2">Showing <b>1</b> to <b>10</b> of <b>12</b>
                                                            results</div>
                                                        <div class="gridjs-pages"><button tabindex="0" role="button"
                                                                disabled="" title="Previous" aria-label="Previous"
                                                                class="">Previous</button><button tabindex="0"
                                                                role="button" class="gridjs-currentPage" title="Page 1"
                                                                aria-label="Page 1">1</button><button tabindex="0"
                                                                role="button" class="" title="Page 2"
                                                                aria-label="Page 2">2</button><button tabindex="0"
                                                                role="button" title="Next" aria-label="Next"
                                                                class="">Next</button></div>
                                                    </div>
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
