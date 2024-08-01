@extends('client.layouts.master')

@section('title')
    Nhịp đập thể thao
@endsection

@section('content')
    <div class="banner text-center" style="height: 300px">

    </div>
    <!-- end of banner -->
    <section class="section pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <h2 class="h5 section-title">Bài viết mới</h2>
                    <article class="card mb-4">
                        <div class="card-body d-flex">
                            <img class="card-img-sm" src="{{ asset('theme/client/images/post/post-3.jpg') }}">
                            <div class="ml-3">
                                <h4><a href="post-details.html" class="post-title">Advice From a Twenty
                                        Something</a>
                                </h4>
                                <ul class="card-meta list-inline mb-0">
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-calendar"></i>14 jan, 2020
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-timer"></i>2 Min To Read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    <article class="card mb-4">
                        <div class="card-body d-flex">
                            <img class="card-img-sm" src="{{ asset('theme/client/images/post/post-2.jpg') }}">
                            <div class="ml-3">
                                <h4><a href="post-details.html" class="post-title">The Design Files - Homes
                                        Minimalist</a></h4>
                                <ul class="card-meta list-inline mb-0">
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-calendar"></i>14 jan, 2020
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-timer"></i>2 Min To Read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    <article class="card mb-4">
                        <div class="card-body d-flex">
                            <img class="card-img-sm" src="{{ asset('theme/client/images/post/post-4.jpg') }}">
                            <div class="ml-3">
                                <h4><a href="post-details.html" class="post-title">The Skinny Confidential</a>
                                </h4>
                                <ul class="card-meta list-inline mb-0">
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-calendar"></i>14 jan, 2020
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-timer"></i>2 Min To Read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <a href="post-details.html" class="btn btn-outline-primary">Xem thêm</a>
                </div>
                <div class="col-lg-4 mb-5">
                    <h2 class="h5 section-title">Bài viết nổi bật</h2>
                    <article class="card mb-4">
                        <div class="card-body d-flex">
                            <img class="card-img-sm" src="{{ asset('theme/client/images/post/post-3.jpg') }}">
                            <div class="ml-3">
                                <h4><a href="post-details.html" class="post-title">Advice From a Twenty
                                        Something</a>
                                </h4>
                                <ul class="card-meta list-inline mb-0">
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-calendar"></i>14 jan, 2020
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-timer"></i>2 Min To Read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    <article class="card mb-4">
                        <div class="card-body d-flex">
                            <img class="card-img-sm" src="{{ asset('theme/client/images/post/post-2.jpg') }}">
                            <div class="ml-3">
                                <h4><a href="post-details.html" class="post-title">The Design Files - Homes
                                        Minimalist</a></h4>
                                <ul class="card-meta list-inline mb-0">
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-calendar"></i>14 jan, 2020
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-timer"></i>2 Min To Read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    <article class="card mb-4">
                        <div class="card-body d-flex">
                            <img class="card-img-sm" src="{{ asset('theme/client/images/post/post-4.jpg') }}">
                            <div class="ml-3">
                                <h4><a href="post-details.html" class="post-title">The Skinny Confidential</a>
                                </h4>
                                <ul class="card-meta list-inline mb-0">
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-calendar"></i>14 jan, 2020
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-timer"></i>2 Min To Read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <a href="post-details.html" class="btn btn-outline-primary">Xem thêm</a>
                </div>
                <div class="col-lg-4 mb-5">
                    <h2 class="h5 section-title">Bài viết phổ biến</h2>
                    <article class="card mb-4">
                        <div class="card-body d-flex">
                            <img class="card-img-sm" src="{{ asset('theme/client/images/post/post-3.jpg') }}">
                            <div class="ml-3">
                                <h4><a href="post-details.html" class="post-title">Advice From a Twenty
                                        Something</a>
                                </h4>
                                <ul class="card-meta list-inline mb-0">
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-calendar"></i>14 jan, 2020
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-timer"></i>2 Min To Read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    <article class="card mb-4">
                        <div class="card-body d-flex">
                            <img class="card-img-sm" src="{{ asset('theme/client/images/post/post-2.jpg') }}">
                            <div class="ml-3">
                                <h4><a href="post-details.html" class="post-title">The Design Files - Homes
                                        Minimalist</a></h4>
                                <ul class="card-meta list-inline mb-0">
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-calendar"></i>14 jan, 2020
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-timer"></i>2 Min To Read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    <article class="card mb-4">
                        <div class="card-body d-flex">
                            <img class="card-img-sm" src="{{ asset('theme/client/images/post/post-4.jpg') }}">
                            <div class="ml-3">
                                <h4><a href="post-details.html" class="post-title">The Skinny Confidential</a>
                                </h4>
                                <ul class="card-meta list-inline mb-0">
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-calendar"></i>14 jan, 2020
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-timer"></i>2 Min To Read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
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
                    <article class="card mb-4">
                        <div class="post-slider">
                            <img src="{{ asset('theme/client/images/post/post-10.jpg') }}" class="card-img-top"
                                alt="post-thumb">
                            <img src="{{ asset('theme/client/images/post/post-1.jpg') }}" class="card-img-top"
                                alt="post-thumb">
                        </div>
                        <div class="card-body">
                            <h3 class="mb-3"><a class="post-title" href="post-elements.html">Elements That You
                                    Can
                                    Use In This Template.</a></h3>
                            <ul class="card-meta list-inline">
                                <li class="list-inline-item">
                                    <a href="author-single.html" class="card-meta-author">
                                        <img src="{{ asset('theme/client/images/john-doe.jpg') }}" alt="John Doe">
                                        <span>John Doe</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-timer"></i>3 Min To Read
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-calendar"></i>15 jan, 2020
                                </li>
                                <li class="list-inline-item">
                                    <ul class="card-meta-tag list-inline">
                                        <li class="list-inline-item"><a href="tags.html">Demo</a></li>
                                        <li class="list-inline-item"><a href="tags.html">Elements</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <p>Heading example Here is example of hedings. You can use this heading by following
                                markdownify rules. For example: use # for heading 1 and use ###### for heading 6.
                            </p>
                            <a href="post-elements.html" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </article>

                    <article class="card mb-4">
                        <div class="post-slider">
                            <img src="{{ asset('theme/client/images/post/post-3.jpg') }}" class="card-img-top"
                                alt="post-thumb">
                        </div>
                        <div class="card-body">
                            <h3 class="mb-3"><a class="post-title" href="post-details.html">Advice From a
                                    Twenty
                                    Something</a></h3>
                            <ul class="card-meta list-inline">
                                <li class="list-inline-item">
                                    <a href="author-single.html" class="card-meta-author">
                                        <img src="{{ asset('theme/client/images/john-doe.jpg') }}">
                                        <span>Mark Dinn</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-timer"></i>2 Min To Read
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-calendar"></i>14 jan, 2020
                                </li>
                                <li class="list-inline-item">
                                    <ul class="card-meta-tag list-inline">
                                        <li class="list-inline-item"><a href="tags.html">Decorate</a></li>
                                        <li class="list-inline-item"><a href="tags.html">Creative</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <p>It’s no secret that the digital industry is booming. From exciBài viếtg startups to global
                                brands, companies are reaching out to digital agencies, responding to the new
                                possibilities available.</p>
                            <a href="post-details.html" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </article>

                    <article class="card mb-4">
                        <div class="post-slider">
                            <img src="{{ asset('theme/client/images/post/post-7.jpg') }}" class="card-img-top"
                                alt="post-thumb">
                        </div>

                        <div class="card-body">
                            <h3 class="mb-3"><a class="post-title" href="post-details.html">Advice From a
                                    Twenty
                                    Something</a></h3>
                            <ul class="card-meta list-inline">
                                <li class="list-inline-item">
                                    <a href="author-single.html" class="card-meta-author">
                                        <img src="{{ asset('theme/client/images/john-doe.jpg') }}">
                                        <span>Charls Xaviar</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-timer"></i>2 Min To Read
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-calendar"></i>14 jan, 2020
                                </li>
                                <li class="list-inline-item">
                                    <ul class="card-meta-tag list-inline">
                                        <li class="list-inline-item"><a href="tags.html">Color</a></li>
                                        <li class="list-inline-item"><a href="tags.html">Recipe</a></li>
                                        <li class="list-inline-item"><a href="tags.html">Fish</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <p>It’s no secret that the digital industry is booming. From exciBài viếtg startups to global
                                brands, companies are reaching out to digital agencies, responding to the new
                                possibilities available.</p>
                            <a href="post-details.html" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </article>

                    <article class="card mb-4">
                        <div class="card-body">
                            <h3 class="mb-3"><a class="post-title" href="post-details.html">Cheerful Loving
                                    Couple
                                    Bakers Drinking Coffee</a></h3>
                            <ul class="card-meta list-inline">
                                <li class="list-inline-item">
                                    <a href="author-single.html" class="card-meta-author">
                                        <img src="{{ asset('theme/client/images/kate-stone.jpg') }}" alt="Kate Stone">
                                        <span>Kate Stone</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-timer"></i>2 Min To Read
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-calendar"></i>14 jan, 2020
                                </li>
                                <li class="list-inline-item">
                                    <ul class="card-meta-tag list-inline">
                                        <li class="list-inline-item"><a href="tags.html">Wow</a></li>
                                        <li class="list-inline-item"><a href="tags.html">Tasty</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <p>It’s no secret that the digital industry is booming. From exciBài viếtg startups to global
                                brands, companies are reaching out to digital agencies, responding to the new
                                possibilities available.</p>
                            <a href="post-details.html" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </article>

                    <article class="card mb-4">
                        <div class="post-slider">
                            <img src="{{ asset('theme/client/images/post/post-5.jpg') }}" class="card-img-top"
                                alt="post-thumb">
                        </div>
                        <div class="card-body">
                            <h3 class="mb-3"><a class="post-title" href="post-details.html">How To Make
                                    Cupcakes
                                    and Cashmere Recipe At Home</a></h3>
                            <ul class="card-meta list-inline">
                                <li class="list-inline-item">
                                    <a href="author-single.html" class="card-meta-author">
                                        <img src="{{ asset('theme/client/images/kate-stone.jpg') }}" alt="Kate Stone">
                                        <span>Kate Stone</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-timer"></i>2 Min To Read
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-calendar"></i>14 jan, 2020
                                </li>
                                <li class="list-inline-item">
                                    <ul class="card-meta-tag list-inline">
                                        <li class="list-inline-item"><a href="tags.html">City</a></li>
                                        <li class="list-inline-item"><a href="tags.html">Food</a></li>
                                        <li class="list-inline-item"><a href="tags.html">Taste</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <p>It’s no secret that the digital industry is booming. From exciBài viếtg startups to global
                                brands, companies are reaching out to digital agencies, responding to the new
                                possibilities available.</p>
                            <a href="post-details.html" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </article>

                    <article class="card mb-4">
                        <div class="post-slider">
                            <img src="{{ asset('theme/client/images/post/post-8.jpg') }}" class="card-img-top"
                                alt="post-thumb">
                            <img src="{{ asset('theme/client/images/post/post-9.jpg') }}" class="card-img-top"
                                alt="post-thumb">
                        </div>
                        <div class="card-body">
                            <h3 class="mb-3"><a class="post-title" href="post-details.html">How To Make
                                    Cupcakes
                                    and Cashmere Recipe At Home</a></h3>
                            <ul class="card-meta list-inline">
                                <li class="list-inline-item">
                                    <a href="author-single.html" class="card-meta-author">
                                        <img src="{{ asset('theme/client/images/john-doe.jpg') }}" alt="John Doe">
                                        <span>John Doe</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-timer"></i>2 Min To Read
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-calendar"></i>14 jan, 2020
                                </li>
                                <li class="list-inline-item">
                                    <ul class="card-meta-tag list-inline">
                                        <li class="list-inline-item"><a href="tags.html">Color</a></li>
                                        <li class="list-inline-item"><a href="tags.html">Recipe</a></li>
                                        <li class="list-inline-item"><a href="tags.html">Fish</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <p>It’s no secret that the digital industry is booming. From exciBài viếtg startups to global
                                brands, companies are reaching out to digital agencies, responding to the new
                                possibilities available.</p>
                            <a href="post-details.html" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </article>

                    <ul class="pagination justify-content-center">
                        <li class="page-item page-item active ">
                            <a href="#!" class="page-link">1</a>
                        </li>
                        <li class="page-item">
                            <a href="#!" class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a href="#!" class="page-link">&raquo;</a>
                        </li>
                    </ul>
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
                                    <a href="{{ route('danh-muc', $danhmuc->slug) }}" class="d-flex">{{ $danhmuc->name }}
                                        <small class="ml-auto">(4)</small></a>
                                </li>
                            @endforeach


                        </ul>
                    </div><!-- tags -->
                    <div class="widget">
                        <h4 class="widget-title"><span>Thẻ</span></h4>
                        <ul class="list-inline widget-list-inline widget-card">
                            <li class="list-inline-item"><a href="tags.html">City</a></li>
                            <li class="list-inline-item"><a href="tags.html">Color</a></li>
                            <li class="list-inline-item"><a href="tags.html">Creative</a></li>
                            <li class="list-inline-item"><a href="tags.html">Decorate</a></li>
                            <li class="list-inline-item"><a href="tags.html">Demo</a></li>
                            <li class="list-inline-item"><a href="tags.html">Elements</a></li>
                            <li class="list-inline-item"><a href="tags.html">Fish</a></li>
                            <li class="list-inline-item"><a href="tags.html">Food</a></li>
                            <li class="list-inline-item"><a href="tags.html">Nice</a></li>
                            <li class="list-inline-item"><a href="tags.html">Recipe</a></li>
                            <li class="list-inline-item"><a href="tags.html">Season</a></li>
                            <li class="list-inline-item"><a href="tags.html">Taste</a></li>
                            <li class="list-inline-item"><a href="tags.html">Tasty</a></li>
                            <li class="list-inline-item"><a href="tags.html">Vlog</a></li>
                            <li class="list-inline-item"><a href="tags.html">Wow</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection
