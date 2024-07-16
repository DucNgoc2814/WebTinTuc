<!DOCTYPE html>
<html lang="en-us">

<head>
    @include('client.layouts.partials.head')
</head>

<body>
    <!-- navigation -->
    @include('client.layouts.header')
    <!-- /navigation -->

    <!-- start of banner -->
    <div class="container-fluid">
        @yield('content')
    </div>
    @include('client.layouts.footer')


    @include('client.layouts.partials.js')
</body>

</html>
