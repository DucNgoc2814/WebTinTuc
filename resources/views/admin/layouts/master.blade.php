<!doctype html>
<html lang="en-us" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>
    @include('admin.layouts.partials.head')
    @yield('list-css')
</head>

<body>
    <div id="layout-wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.menu')
        <div class="main-content">
            @yield('content')
            @include('admin.layouts.footer')
        </div>
    </div>
    <script src="{{ asset('theme/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('theme/admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
    @include('admin.layouts.partials.js')
    @yield('list-js')
</body>

</html>
