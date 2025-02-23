@extends('client.layouts.master')

@section('title')
    Giới thiệu
@endsection

@section('content')
<section class="section-sm mt-5">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                <div class="image-wrapper">
                    <img
                        class="img-fluid w-100"
                        src="{{ asset('theme/client/images/about-us-1.jpg') }}"
                    />
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="content pl-lg-3 pl-0">
                    <h2
                        id="what-is-the-main-mission-of-mine-and-what-i-wanna-do"
                    >
                        What is the main mission of mine and what i
                        wanna do?
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur
                        sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt ut labore et dolore magna aliquyam
                        erat, sed diam voluptua. At vero eos et accusam
                        et justo duo dolores et ea rebum.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section wave">
    <img src="{{ asset('theme/client/images/backgrounds/wave-bg.svg')}}" class="wave-bg" />
    <div class="container">
        <div class="row justify-content-around align-items-center">
            <div class="col-12 mb-5 text-center">
                <h2>What is the main mission of company</h2>
            </div>

            <div class="col-lg-4 col-md-6 text-center">
                <h4 class="mission-name mb-4">Optimize</h4>
                <p class="mx-lg-3">
                    Lorem ipsum dolor sit amet, sadipscing elitr, sed
                    diam nonumy tempor invidunt labore magna aliquyam
                </p>
            </div>

            <div class="col-lg-4 col-md-6 text-center">
                <h4 class="mission-name mb-4">Definate</h4>
                <p class="mx-lg-3">
                    Lorem ipsum dolor sit amet, sadipscing elitr, sed
                    diam nonumy tempor invidunt labore magna aliquyam
                </p>
            </div>

            <div class="col-lg-4 col-md-6 text-center">
                <h4 class="mission-name mb-4">Capacity</h4>
                <p class="mx-lg-3">
                    Lorem ipsum dolor sit amet, sadipscing elitr, sed
                    diam nonumy tempor invidunt labore magna aliquyam
                </p>
            </div>
        </div>
    </div>

    <svg
        class="wave-shape-1"
        width="39"
        height="40"
        viewBox="0 0 39 40"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
    >
        <path
            d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z"
            stroke="#040306"
            stroke-miterlimit="10"
        />
        <path
            class="path"
            d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z"
        />
        <path
            d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z"
            stroke="#040306"
            stroke-miterlimit="10"
        />
    </svg>

    <svg
        class="wave-shape-2"
        width="39"
        height="39"
        viewBox="0 0 39 39"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
    >
        <g filter="url(#filter0_d)">
            <path
                class="path"
                d="M24.1587 21.5623C30.02 21.3764 34.6209 16.4742 34.435 10.6128C34.2491 4.75147 29.3468 0.1506 23.4855 0.336498C17.6241 0.522396 13.0233 5.42466 13.2092 11.286C13.3951 17.1474 18.2973 21.7482 24.1587 21.5623Z"
            />
            <path
                d="M5.64626 20.0297C11.1568 19.9267 15.7407 24.2062 16.0362 29.6855L24.631 29.4616L24.1476 10.8081L5.41797 11.296L5.64626 20.0297Z"
                stroke="#040306"
                stroke-miterlimit="10"
            />
        </g>
        <defs>
            <filter
                id="filter0_d"
                x="0.905273"
                y="0"
                width="37.8663"
                height="38.1979"
                filterUnits="userSpaceOnUse"
                color-interpolation-filters="sRGB"
            >
                <feFlood
                    flood-opacity="0"
                    result="BackgroundImageFix"
                />
                <feColorMatrix
                    in="SourceAlpha"
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                />
                <feOffset dy="4" />
                <feGaussianBlur stdDeviation="2" />
                <feColorMatrix
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"
                />
                <feBlend
                    mode="normal"
                    in2="BackgroundImageFix"
                    result="effect1_dropShadow"
                />
                <feBlend
                    mode="normal"
                    in="SourceGraphic"
                    in2="effect1_dropShadow"
                    result="shape"
                />
            </filter>
        </defs>
    </svg>

    <svg
        class="wave-shape-3"
        width="39"
        height="40"
        viewBox="0 0 39 40"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
    >
        <path
            d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z"
            stroke="#040306"
            stroke-miterlimit="10"
        />
        <path
            class="path"
            d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z"
        />
        <path
            d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z"
            stroke="#040306"
            stroke-miterlimit="10"
        />
    </svg>

    <svg
        class="wave-shape-4"
        width="39"
        height="39"
        viewBox="0 0 39 39"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
    >
        <g filter="url(#filter0_d)">
            <path
                class="path"
                d="M24.1587 21.5623C30.02 21.3764 34.6209 16.4742 34.435 10.6128C34.2491 4.75147 29.3468 0.1506 23.4855 0.336498C17.6241 0.522396 13.0233 5.42466 13.2092 11.286C13.3951 17.1474 18.2973 21.7482 24.1587 21.5623Z"
            />
            <path
                d="M5.64626 20.0297C11.1568 19.9267 15.7407 24.2062 16.0362 29.6855L24.631 29.4616L24.1476 10.8081L5.41797 11.296L5.64626 20.0297Z"
                stroke="#040306"
                stroke-miterlimit="10"
            />
        </g>
        <defs>
            <filter
                id="filter0_d"
                x="0.905273"
                y="0"
                width="37.8663"
                height="38.1979"
                filterUnits="userSpaceOnUse"
                color-interpolation-filters="sRGB"
            >
                <feFlood
                    flood-opacity="0"
                    result="BackgroundImageFix"
                />
                <feColorMatrix
                    in="SourceAlpha"
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                />
                <feOffset dy="4" />
                <feGaussianBlur stdDeviation="2" />
                <feColorMatrix
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"
                />
                <feBlend
                    mode="normal"
                    in2="BackgroundImageFix"
                    result="effect1_dropShadow"
                />
                <feBlend
                    mode="normal"
                    in="SourceGraphic"
                    in2="effect1_dropShadow"
                    result="shape"
                />
            </filter>
        </defs>
    </svg>
</section>

<section class="section-sm">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5 col-md-6 order-2 order-md-1">
                <div class="pr-lg-3 pr-0">
                    <h2 class="mb-4">
                        We have a great team of great authors
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur
                        sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt ut labore et dolore magna aliquyam
                        erat, sed diam voluptua. At vero eos et
                    </p>
                    <a
                        href="http://demo.themefisher.com/authors"
                        class="btn btn-primary"
                        >Our Authors</a
                    >
                </div>
            </div>
            <div
                class="col-lg-5 col-md-6 mb-4 mb-md-0 order-1 order-md-2"
            >
                <div class="image-wrapper">
                    <img
                        class="img-fluid w-100"
                        src="{{ asset('theme/client/images/about-us-2.jpg') }}"
                    />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-sm">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                <div class="video-wrapper">
                    <img src="{{ asset('theme/client/images/youtube.png')}}" class="img-fluid" />
                    <a
                        class="play-btn video-btn"
                        data-toggle="modal"
                        data-src="https://www.youtube.com/embed/dyZcRRWiuuw"
                        data-target="#myModal"
                        href="#"
                        ><i class="ti-control-play"></i
                    ></a>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 text-center text-md-left">
                <h2 class="mb-4">
                    Don’t forget to subscribe my Youtube channel “Richi
                    Andorn”
                </h2>
                <a
                    href="https://www.youtube.com/channel/UCx9qVW8VF0LmTi4OF2F8YdA"
                    class="btn btn-primary"
                    >Visit Channel</a
                >
            </div>
        </div>
    </div>
</section>
@endsection