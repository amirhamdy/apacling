<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="content-language" content="en">
    <title>@yield('page_title', config('app.name')) | {{ config('app.name') }}</title>
    {{--<meta name="_token" content="{{ csrf_token() }}">--}}
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" sizes="32x32">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/envas-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.transitions.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootsnav.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/loader.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    @yield('page_styles')
</head>
<body>

<!--Loader-->
<div class="loader">
    <div class="cssload-loader">
        <div class="cssload-inner cssload-one">
        </div>
        <div class="cssload-inner cssload-two">
        </div>
        <div class="cssload-inner cssload-three">
        </div>
    </div>
</div>
<!--Loader Ends -->

@include('website.partials.header')

@if($banner_path)
    <!--  BANNER SECTION  -->
    <div id="banner" class="container-fluid">
        <img src="{{ asset( $banner_path ) }}" alt="banner">
    </div>
    <!--  END BANNER SECTION  -->
@endif

@yield('page_content')

@include('website.partials.footer')

<script src="{{ asset('js/jquery-2.2.3.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.parallax-1.1.3.js') }}"></script>
<script src="{{ asset('js/jquery.appear.js') }}"></script>
<script src="{{ asset('js/jquery-countTo.js') }}"></script>
<script src="{{ asset('js/bootsnav.js') }}"></script>
<script src="{{ asset('js/jquery.cubeportfolio.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/viedobox_video.js') }}"></script>
<script src="{{ asset('js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('js/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('js/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('js/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('js/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('js/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/functions.js') }}"></script>
@yield('page_scripts')
</body>
</html>
