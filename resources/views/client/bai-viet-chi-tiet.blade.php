@extends('client.layouts.master')

@section('title')
    Bảng điều khiển
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class=" col-lg-9   mb-5 mb-lg-0">
                    <article>
                        <div class="post-slider mb-4">
                            <img src="{{ \Storage::url($post->image) }}" class="card-img" alt="post-thumb">
                        </div>

                        <h1 class="h2">{{ $post->title }}</h1>
                        <ul class="card-meta my-3 list-inline">
                            <li class="list-inline-item">
                                <a href="author-single.html" class="card-meta-author">
                                    <img src="{{ asset('theme/client/images/john-doe.jpg') }}">
                                    <span>{{ $post->user->name }}</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <i class="ti-calendar"></i>{{ $post->created_at->format('d M, Y') }}
                            </li>
                        </ul>
                        <div class="content">
                            {!! $post->content !!}
                        </div>
                    </article>

                </div>

                <div class="col-lg-9 col-md-12" id="comment-section">
                    <div class="mb-5 border-top mt-4 pt-5">
                        <h3 class="mb-4">Bình luận</h3>
                        @foreach ($comments as $comment)
                            <div class="media d-block d-sm-flex mb-4 pb-4">
                                <a class="d-inline-block mr-2 mb-3 mb-md-0" href="#">
                                    <img src="{{ asset('theme/client/images/post/user-01.jpg') }}"
                                        class="mr-3 rounded-circle" alt="">
                                </a>
                                <div class="media-body">
                                    <a href="#!" class="h4 d-inline-block mb-3">{{ $comment->user->name }}</a>

                                    <p>{{$comment->content}}
                                    </p>

                                    <span class="text-black-800 mr-3 font-weight-600">{{ $comment->created_at->format('H:i') }} vào ngày {{ $comment->created_at->format('d-m-Y') }}</span>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <div >
                        <h3 class="mb-4">Để lại câu trả lời</h3>
                        <form method="POST" action="{{ route('binh-luan') }}" >
                            @csrf
                            <div class="row">
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                <div class="form-group col-md-12">
                                    <textarea class="form-control shadow-none" name="content" rows="7" required></textarea>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Bình luận ngay</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
