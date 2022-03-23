<!--Header Starts-->
<header class="layout_first">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default bootsnav">
                <div class="topbar green_bg">
                    <span class="call">Call: +60  03-2299 4400 </span>
                    <span class="call">Email: <a href="#">info@apacling.com</a></span>
                    <ul class="top_social">
                        <li><a href="#." class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li>
                            <a href="https://twitter.com/apacling" target="_blank" class="twitter">
                                <i class="icon-twitter4"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/apacling-translations-1221aa193/" class="google">
                                <i class="icon-linkedin2"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="attr-nav hidden">
                    <a class="scrolling getquote btn-dark text-uppercase border_radius" href="#callform">Get a quote</a>
                </div>
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img style="width: 250px;" src="{{ asset('images/logo.png') }}" class="logo" alt="logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- nav links -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="slideInUp" data-out="fadeOut">
                        <li><a href="{{ route('home') }}" class="active border">Home</a></li>
                        <li><a href="{{ route('about') }}" class="border">About Us</a></li>
                        <li class="dropdown">
                            <a href="{{ route('services') }}" class="dropdown-toggle border" data-toggle="dropdown">Services</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('service-details', 0) }}">Translation</a></li>
                                <li><a href="{{ route('service-details', 1) }}">Localization</a></li>
                                <li><a href="{{ route('service-details', 2) }}">DTP</a></li>
                                <li><a href="{{ route('service-details', 3) }}">Software Engineering</a></li>
                                <li><a href="{{ route('service-details', 4) }}">MTPE</a></li>
                                <li><a href="{{ route('service-details', 5) }}">Localization Engineering</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('why_us') }}" class="border">Why US</a></li>
                        <li><a href="{{ route('careers') }}" class="border">Careers</a></li>
                        <li><a href="{{ route('contact-us') }}" class="border">Contact US</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
</header>
<!--HEADER Ends-->
