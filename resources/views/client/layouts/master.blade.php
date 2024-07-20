<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @yield('styles')
    @yield('style-libs')
    <link rel="stylesheet" href="{{asset('theme/dest//fonts.googleapis.com/css?family=Roboto:400,500')}}">
    <link rel="stylesheet" href="{{asset('theme/dest/styles/style.css')}}">
    <script src="{{asset('theme/dest/scripts/uikit.js')}}"></script>
    <script src="{{asset('theme/dest/scripts/uikit-icons.js')}}"></script>
</head>

<body>
    <div class="uk-offcanvas-content">
        @include('client.layouts.header');
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
        </div>
        @include('client.layouts.footer');
    </div>
    <script src="{{asset('theme/dest/scripts/script.js')}}"></script>
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyClyjCemJi4m2q78gNeGkhlckpdH1hzTYA&amp;callback=initMap"
        async defer></script>
</body>

</html>