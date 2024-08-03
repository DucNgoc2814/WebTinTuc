@extends('client.layouts.master')

@section('title')
    Nhịp đập thể thao
@endsection

@section('content')
    <style>
        .post-title {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            min-height: calc(1.2em * 2);
            /* Điều chỉnh 1.2em theo line-height của bạn */
            line-height: 1.2em;
            /* Điều chỉnh nếu cần */
        }
    </style>
    <div class="banner text-center" style="height: 300px">

    </div>
    <!-- end of banner -->
    <section class="section pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <h2 class="h5 section-title">Bài viết mới</h2>
                    @foreach ($data['post_new'] as $post_new)
                        <article class="card mb-4">
                            <div class="card-body d-flex">
                                <img class="card-img-sm" src="{{ \Storage::url($post_new->image) }}">
                                <div class="ml-3">
                                    <h4><a href="{{ route('bai-viet-chi-tiet', $post_new->slug) }}"
                                            class="post-title">{{ $post_new->title }}</a>
                                    </h4>
                                    <ul class="card-meta list-inline mb-0">
                                        <li class="list-inline-item mb-0">
                                            <i class="ti-calendar"></i>{{ $post_new->created_at->format('d M, Y') }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    @endforeach

                    <a href="post-details.html" class="btn btn-outline-primary">Xem thêm</a>
                </div>
                <div class="col-lg-4 mb-5">
                    <h2 class="h5 section-title">Bài viết nổi bật</h2>
                    @foreach ($data['post_trending'] as $post_trending)
                        <article class="card mb-4">
                            <div class="card-body d-flex">
                                <img class="card-img-sm" src="{{ \Storage::url($post_trending->image) }}">
                                <div class="ml-3">
                                    <h4><a href="{{ route('bai-viet-chi-tiet', $post_trending->slug) }}"
                                            class="post-title">{{ $post_trending->title }}</a>
                                    </h4>
                                    <ul class="card-meta list-inline mb-0">
                                        <li class="list-inline-item mb-0">
                                            <i class="ti-calendar"></i>{{ $post_trending->created_at->format('d M, Y') }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    @endforeach
                    <a href="post-details.html" class="btn btn-outline-primary">Xem thêm</a>
                </div>
                <div class="col-lg-4 mb-5">
                    <h2 class="h5 section-title">Bài viết phổ biến</h2>
                    @foreach ($data['post_popular'] as $post_popular)
                        <article class="card mb-4">
                            <div class="card-body d-flex">
                                <img class="card-img-sm" src="{{ \Storage::url($post_popular->image) }}">
                                <div class="ml-3">
                                    <h4><a href="{{ route('bai-viet-chi-tiet', $post_popular->slug) }}"
                                            class="post-title">{{ $post_popular->title }}</a>
                                    </h4>
                                    <ul class="card-meta list-inline mb-0">
                                        <li class="list-inline-item mb-0">
                                            <i class="ti-calendar"></i>{{ $post_popular->created_at->format('d M, Y') }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    @endforeach
                    <a href="post-details.html" class="btn btn-outline-primary">Xem thêm</a>
                </div>

                <div class="col-12">
                    <div class="border-bottom border-default"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8  mb-5 mb-lg-0">
                    <h2 class="h5 section-title">Bài viết gần đây</h2>
                    @foreach ($data['posts'] as $post)
                        <article class="card mb-4">
                            <div class="post-slider">
                                <img src="{{ \Storage::url($post->image) }}" class="card-img-top"
                                    alt="post-thumb">
                            </div>
                            <div class="card-body">
                                <h3 class="mb-3"><a class="post-title"
                                        href="{{ route('bai-viet-chi-tiet', $post->slug) }}">{{ $post->title }}</a></h3>
                                <ul class="card-meta list-inline">
                                    <li class="list-inline-item">
                                        <a href="author-single.html" class="card-meta-author">
                                            <img src="{{ asset('theme/client/images/john-doe.jpg') }}" alt="John Doe">
                                            <span>{{ $post->user->name }}</span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="ti-calendar"></i>{{ $post->created_at->format('d M, Y') }}
                                    </li>
                                </ul>
                                <p>{{ $post->description }}</p>
                                <a href="{{ route('bai-viet-chi-tiet', $post->slug) }}" class="btn btn-outline-primary">Xem
                                    thêm</a>
                            </div>
                        </article>
                    @endforeach



                    @if ($data['posts']->hasPages())
                        <ul class="pagination justify-content-center">
                            {{-- Previous Page Link --}}
                            @if ($data['posts']->onFirstPage())
                                <li class="page-item disabled">
                                    <span class="page-link">&laquo;</span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a href="{{ $data['posts']->previousPageUrl() }}" class="page-link"
                                        rel="prev">&laquo;</a>
                                </li>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($data['posts']->getUrlRange(1, $data['posts']->lastPage()) as $page => $url)
                                @if ($page == $data['posts']->currentPage())
                                    <li class="page-item active">
                                        <span class="page-link">{{ $page }}</span>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                                    </li>
                                @endif
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($data['posts']->hasMorePages())
                                <li class="page-item">
                                    <a href="{{ $data['posts']->nextPageUrl() }}" class="page-link"
                                        rel="next">&raquo;</a>
                                </li>
                            @else
                                <li class="page-item disabled">
                                    <span class="page-link">&raquo;</span>
                                </li>
                            @endif
                        </ul>
                    @endif

                </div>
                <aside class="col-lg-4 sidebar-home">
                    <!-- authors -->
                    <div class="widget widget-author">
                        <h4 class="widget-title">Tác giả nổi bật</h4>
                        @foreach ($data['tac_gias'] as $tac_gia)
                            <div class="media align-items-center">
                                <div class="mr-3">
                                    <img class="widget-author-image"
                                        src="{{ asset('theme/client/images/john-doe.jpg') }}">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-1"><a class="post-title"
                                            href="author-single.html">{{ $tac_gia->name }}</a>
                                    </h5>
                                    <span>Tác giả có số bài viết: 10</span>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <!-- categories -->
                    <div class="widget widget-categories">
                        <h4 class="widget-title"><span>Danh mục</span></h4>
                        <ul class="list-unstyled widget-list">
                            @foreach ($data['danh_mucs'] as $danhmuc)
                                <li>
                                    <a href="{{ route('danh-muc', $danhmuc->category->slug) }}"
                                        class="d-flex">{{ $danhmuc->category->name }}
                                        <small class="ml-auto">({{ $danhmuc->post_count }})</small></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection
