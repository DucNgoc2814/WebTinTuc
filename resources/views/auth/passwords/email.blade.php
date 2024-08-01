@extends('client.layouts.master')

@section('title')
    Quên mật khẩu
@endsection

@section('content')
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
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-4">

                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">Quên mật khẩu?</h5>
                                <p class="text-muted">Đặt lại mật khẩu.</p>

                                <lord-icon src="https://cdn.lordicon.com/rhvddzym.json" trigger="loop"
                                    colors="primary:#0ab39c" class="avatar-xl"></lord-icon>

                            </div>

                            <div class="alert border-0 alert-warning text-center mb-2 mx-2" role="alert">
                                Nhập email của bạn và chúng tôi sẽ gửi mật khẩu cho bạn!
                            </div>
                            <div class="p-2">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form method="POST" action="">
                                    @csrf

                                    <div class="mb-4">
                                        <label for="email" class="col-form-label text-md-end">{{ __('Email') }}</label>
                                        <div class="">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                placeholder="Nhập địa chỉ email" value="{{ $email ?? old('email') }}"
                                                required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="text-center mt-4">
                                        <div class="">
                                            <button type="submit" class="btn btn-success w-100">
                                                {{ __('Gửi') }}
                                            </button>
                                        </div>
                                    </div>

                                </form><!-- end form -->
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
@endsection
