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
        @if (session('success'))
            <div id="success-alert" class="custom-alert alert alert-success" role="alert">
                {{ session('success') }}
            </div>

            <style>
                .custom-alert {
                    position: fixed;
                    top: 85px;
                    right: 40px;
                    z-index: 9999;
                    max-width: 300px;
                }
            </style>

            <script>
                $(document).ready(function() {
                    $("#success-alert").fadeIn('slow');
                    setTimeout(function() {
                        $("#success-alert").fadeOut('slow');
                    }, 1500);
                });
            </script>
        @endif
        @yield('content')
    </div>
    @include('client.layouts.footer')


    @include('client.layouts.partials.js')
</body>

</html>
