<header class="navigation fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-white">
            <a class="navbar-brand order-1" href="{{ route('/') }}">
                <img class="img-fluid" width="100px" src="{{ asset('theme/client/images/logo.png') }}"
                    alt="Reader | Hugo Personal Blog Template">
            </a>
            <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
                @include('client.layouts.menu')
            </div>

            <div class="order-2 order-lg-3 d-flex align-items-center">
                <div class="nav-item dropdown">
                    @if (Auth::user())
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Xin chào, {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            @if (Auth::user()->type == 'admin')
                                <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Quản lý</a>
                            @endif
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    @else
                        <a class="nav-link" href="{{ route('dang-nhap') }}">Đăng nhập</a>
                    @endif



                </div>

                <!-- search -->
                <form class="search-bar">
                    <input id="search-query" name="s" type="search" placeholder="Tìm kiếm">
                </form>

                <button class="navbar-toggler border-0 order-1" type="button" data-toggle="collapse"
                    data-target="#navigation">
                    <i class="ti-menu"></i>
                </button>
            </div>

        </nav>
    </div>
</header>
