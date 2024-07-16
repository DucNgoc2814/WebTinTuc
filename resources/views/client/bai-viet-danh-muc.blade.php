@extends('client.layouts.master')

@section('title')
    {{ $data['0']->ten }}
@endsection

@section('content')
<section class="section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 mb-4">
          <h1 class="h2 mb-4 mt-2">Danh mục: {{ $data['0']->ten }}</mark>
          </h1>
        </div>
        <div class="col-lg-10">
          <article class="card mb-4">
            <div class="row card-body">
              <div class="col-md-4 mb-4 mb-md-0">
                <div class="post-slider slider-sm">
                  <img src="images/post/post-7.jpg" class="card-img" alt="post-thumb" style="height:200px; object-fit: cover;">
                </div>
              </div>
              <div class="col-md-8">
                <h3 class="h4 mb-3"><a class="post-title" href="post-details.html">Advice From a Twenty Something</a></h3>
                <ul class="card-meta list-inline">
                  <li class="list-inline-item">
                    <a href="author-single.html" class="card-meta-author">
                      <img src="images/john-doe.jpg">
                      <span>Charls Xaviar</span>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <i class="ti-timer"></i>2 lượt xem
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
                <p> It’s no secret that the digital industry is booming. From exciting startups to global brands</p>
                <a href="post-details.html" class="btn btn-outline-primary">Read More</a>
              </div>
            </div>
          </article>
          
          <article class="card mb-4">
            <div class="row card-body">
              <div class="col-12">
                <h3 class="h4 mb-3"><a class="post-title" href="post-details.html">Cheerful Loving Couple Bakers Drinking Coffee</a></h3>
                <ul class="card-meta list-inline">
                  <li class="list-inline-item">
                    <a href="author-single.html" class="card-meta-author">
                      <img src="images/kate-stone.jpg" alt="Kate Stone">
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
                <p>It’s no secret that the digital industry is booming. From exciting startups to global brands, companies are reaching out to digital agencies, responding to the new possibilities available.</p>
                <a href="post-details.html" class="btn btn-outline-primary">Read More</a>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
@endsection