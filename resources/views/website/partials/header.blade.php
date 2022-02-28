<header class="layout_fifth">
    <nav class="navbar navbar-default brand-center navbar-fixed white no-background bootsnav">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="images/logo-home5.png" class="logo logo-display" alt="">
                            <img src="images/home3-logo.png" class="logo logo-scrolled" alt="">
                        </a>
                    </div> <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav" data-in="slideInUp" data-out="fadeOut">>
                            <li class="active"><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li><a href="{{ route('why_us') }}">Why Us</a></li>
                            <li><a href="{{ route('careers') }}">Careers</a></li>
                            <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div>
        </div>
    </nav>
</header>
