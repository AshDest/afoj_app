<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Bizcell - Landing Page Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WebSite of Ajoj-drc" />
    <meta name="keywords" content="Afoj, Web site" />
    <meta name="author" content="AshDest" />
    <meta name="version" content="1.0.0" />

    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <!-- BOOTSTRAP -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- ICON -->
    <link href="{{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/line.css') }}" rel="stylesheet">
    <!-- SLIDER-->
    <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/tobii.min.css') }}">
    <!-- Custom Css -->
    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/colors/default.css') }}" rel="stylesheet" id="color-opt">
</head>

<body>
    <!-- <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="cube1"></div>
                <div class="cube2"></div>
            </div>
        </div>
    </div> -->

    <!-- Navbar STart -->
    @include('layouts._header')
    <!--end header-->
    <!-- Navbar End -->

    @yield('content')

    <!-- Partner End -->
    @include('layouts._footer')
    <!-- Footer End -->


    <!-- Style switcher -->
    <div id="style-switcher" class="bg-light border p-3 pt-2 pb-2" onclick="toggleSwitcher()">
        <div>
            <h6 class="title text-center">Select Your Color</h6>
            <ul class="pattern">
                <li class="list-inline-item">
                    <a class="color1" href="javascript: void(0);" onclick="setColor('default')"></a>
                </li>
                <li class="list-inline-item">
                    <a class="color2" href="javascript: void(0);" onclick="setColor('blue')"></a>
                </li>
                <li class="list-inline-item">
                    <a class="color3" href="javascript: void(0);" onclick="setColor('yellow')"></a>
                </li>
                <li class="list-inline-item">
                    <a class="color4" href="javascript: void(0);" onclick="setColor('dark-pink')"></a>
                </li>
                <li class="list-inline-item">
                    <a class="color5" href="javascript: void(0);" onclick="setColor('orange')"></a>
                </li>
                <li class="list-inline-item">
                    <a class="color6" href="javascript: void(0);" onclick="setColor('brown')"></a>
                </li>
                <li class="list-inline-item">
                    <a class="color7" href="javascript: void(0);" onclick="setColor('green')"></a>
                </li>
                <li class="list-inline-item">
                    <a class="color8" href="javascript: void(0);" onclick="setColor('purple')"></a>
                </li>
                <li class="list-inline-item">
                    <a class="color9" href="javascript: void(0);" onclick="setColor('firozi')"></a>
                </li>
            </ul>
        </div>
        <div class="bottom">
            <a href="javascript: void(0);" class="settings bg-white shadow d-block"><i
                    class="mdi mdi-cog ms-1 mdi-24px position-absolute mdi-spin text-primary"></i></a>
        </div>
    </div>
    <!-- end Style switcher -->

    <!-- Back to top -->
    <a href="#" class="back-to-top rounded-pill text-center" id="back-to-top">
        <i class="mdi mdi-chevron-up d-block"> </i>
    </a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- SLIDER -->
    <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/tiny-slider-init.js') }}"></script>
    <!-- play-btn -->
    <script src="{{ asset('assets/js/tobii.min.js') }}"></script>
    <!-- PARALLAX -->
    <script src="{{ asset('assets/js/parallax.js') }}"></script>
    <!-- BACKGROUND -->
    <script src="{{ asset('assets/js/easy_background.js') }}"></script>
    <!-- Switcher -->
    <script src="{{ asset('assets/js/switcher.js') }}"></script>
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>
    <!-- Main Js -->
    <script src="{{ asset('assets/js/plugins.init.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script>
        easy_background("#hero-images", {
            slide: ["assets/images/bg/bg01.jpg", "assets/images/bg/bg02.jpg", "assets/images/bg/bg03.jpg"],
            delay: [5000, 5000, 5000]
        });
    </script>

</body>


<!-- Mirrored from shreethemes.in/bizcell/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Feb 2024 11:55:14 GMT -->

</html>
