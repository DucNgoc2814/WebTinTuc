@extends('client.layouts.master')

@section('title')
    Đăng nhập
@endsection

@section('content')
    <div class="auth-page-wrapper pt-5 mb-5">
        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="index.html" class="d-inline-block auth-logo">
                                    <img src="assets/images/logo-light.png" alt="" height="20">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Chào mừng bạn!</h5>
                                    <p class="text-muted">Đăng nhập để đến với website của chúng tôi.</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form method="POST" action="{{ route('dang-nhap') }}">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="email" class="form-label text-md-end">{{ __('Email') }}</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}" placeholder="Nhập email" required
                                                    autocomplete="email" autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="password"
                                                class="col-form-label text-md-end">{{ __('Mật khẩu') }}</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" placeholder="Nhập mật khẩu" required
                                                    autocomplete="current-password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="float-end">
                                                    <a class="text-muted"
                                                        href="{{ route('password.request') }}">
                                                        {{ __('Quên mật khẩu?') }}
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit">Đăng nhập</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="mt-4 text-center mb-5">
                            <p class="mb-0">Bạn chưa có tài khoản?<a href="{{ route('dang-ky') }}"
                                    class="fw-semibold text-primary text-decoration-underline"> Đăng ký </a> </p>
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->
    </div>
@endsection
