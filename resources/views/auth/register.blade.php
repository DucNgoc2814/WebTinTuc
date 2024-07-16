@extends('client.layouts.master')

@section('title')
    Đăng ký
@endsection

@section('content')
    <div class="auth-page-content mb-5">
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
                                <h5 class="text-primary">Tạo tài khoản mới</h5>
                                <p class="text-muted">Tạo tài khoản miễn phí ngay bây giờ.</p>
                            </div>
                            <div class="p-2 mt-4">
                                <form method="POST" action="{{ route('dang-ky') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="col-form-label text-md-end">{{ __('Email') }}<span
                                        class="text-danger">*</span></label>
                                        <div class="">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                             placeholder="Nhập email" required autocomplete="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="col-form-label text-md-end">{{ __('Tên hiển thị') }}<span
                                        class="text-danger">*</span></label>
                                        <div class="">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" 
                                            placeholder="Nhập tên hiển thị" required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="mb-3">
                                                <label for="password" class="col-form-label text-md-end">{{ __('Mật khẩu') }}<span
                                                    class="text-danger">*</span></label>
                                                <div class="">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                                    placeholder="Nhập mật khẩu" required autocomplete="new-password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password-confirm" class="col-form-label text-md-end">{{ __('Xác nhận mật khẩu') }}</label>

                                        <div class="">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" 
                                            placeholder="Xác nhận mật khẩu" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                        <h5 class="fs-13">Password must contain:</h5>
                                        <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>
                                        <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>
                                        <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)
                                        </p>
                                        <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>
                                    </div>

                                    <div class="mt-4">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-success">
                                                {{ __('Đăng ký') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                    <div class="mt-4 text-center mb-5">
                        <p class="mb-0">Bạn đã có tài khoản?
                            <a href="{{ route('dang-nhap') }}" class="fw-semibold text-primary text-decoration-underline"> Đăng nhập </a> </p>
                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
@endsection
