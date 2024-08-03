@extends('client.layouts.master')

@section('title')
    {{ $data['category']->name }}
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 mb-4">
                    <h1 class="h2 mb-4 mt-2">Danh mục: {{ $data['category']->name }}</mark>
                    </h1>
                </div>
                <div class="col-lg-10">
                    @foreach ($data['posts'] as $post)
                        <article class="card mb-4">
                            <div class="row card-body">
                                <div class="col-md-4 mb-4 mb-md-0">
                                    <div class="post-slider slider-sm">
                                        <img src="{{ \Storage::url($post->image) }}" class="card-img"
                                            alt="post-thumb" style="height:200px; object-fit: cover;">
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
            </div>
        </div>
    </section>
@endsection
