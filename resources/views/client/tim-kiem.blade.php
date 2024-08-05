@extends('client.layouts.master')

@section('title')
    Nhịp đập thể thao
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 mb-4">
                    <h1 class="h2 mb-4 mt-2">Từ khóa: {{ $search }}</mark>
                    </h1>
                </div>
                <div class="col-lg-10">
                    @foreach ($posts as $post)
                        <article class="card mb-4">
                            <div class="row card-body">
                                <div class="col-md-4 mb-4 mb-md-0">
                                    <div class="post-slider slider-sm">
                                        <img src="{{ \Storage::url($post->image) }}" class="card-img" alt="post-thumb"
                                            style="height:200px; object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h3 class="h4 mb-3"><a class="post-title"
                                            href="{{ route('bai-viet-chi-tiet', $post->slug) }}">{{ $post->title }}</a>
                                    </h3>
                                    <ul class="card-meta list-inline">
                                        <li class="list-inline-item">
                                            <a href="author-single.html" class="card-meta-author">
                                                <img src="{{ asset('theme/client/images/john-doe.jpg') }}">
                                                <span>{{ $post->user->name }}</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="ti-timer"></i>{{ $post->views }} lượt xem
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="ti-calendar"></i>{{ $post->created_at->format('d M, Y') }}
                                        </li>
                                    </ul>
                                    <p>{{ $post->description }}</p>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
                @if ($posts->hasPages())
                    <ul class="pagination justify-content-center">
                        {{-- Previous Page Link --}}
                        @if ($posts->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link">&laquo;</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a href="{{ $posts->previousPageUrl() }}" class="page-link" rel="prev">&laquo;</a>
                            </li>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
                            @if ($page == $posts->currentPage())
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
                        @if ($posts->hasMorePages())
                            <li class="page-item">
                                <a href="{{ $posts->nextPageUrl() }}" class="page-link" rel="next">&raquo;</a>
                            </li>
                        @else
                            <li class="page-item disabled">
                                <span class="page-link">&raquo;</span>
                            </li>
                        @endif
                    </ul>
                @endif
            </div>
        </div>
    </section>
@endsection
