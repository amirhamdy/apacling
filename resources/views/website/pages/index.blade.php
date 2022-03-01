@extends('website.layout')

@section('page_title')
    Home
@endsection

@section('page_styles')
@endsection

<?php
$banner_path = 0;
?>

@section('page_content')
    <!--Slider Main-->
    <section class="rev_slider_wrapper">
        <div id="rev_slider" class="rev_slider" data-version="5.0">
            <ul class="rev_slider_black">
                <!-- SLIDE  -->
                <li data-transition="fade">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('images/home/slider/4.jpg') }}" alt="" data-bgposition="center center"
                         data-bgfit="cover">
                    <!-- LAYER NR. 1 -->
                    <div class="hidden">
                        <h1 class="tp-caption tp-resizeme uppercase text-center"
                            data-x="['center','center','center','center']" data-hoffset="['0','15','15','15']"
                            data-y="['300','200','180','130']" data-voffset="['0','0','0','0']"
                            data-responsive_offset="on"
                            data-transform_idle="o:1;"
                            data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-start="1000"><span class="white_t">Financial </span> <strong
                                class="blue_t">Services</strong>
                        </h1>
                        <div class="tp-caption tp-resizeme text-center"
                             data-x="['center','center','center','center']" data-hoffset="['0','15','15','15']"
                             data-y="['365','265','240','205']" data-voffset="['0','0','0','0']"
                             data-responsive_offset="on"
                             data-transform_idle="o:1;"
                             data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="1300"><p class="white_t">We offer the most complete house renovating services
                                in the country, from kitchen
                                <br> design to bathroom remodeling.</p>
                        </div>
                        <div class="tp-caption tp-resizeme text-center"
                             data-x="['center','center','center','center']" data-hoffset="['0','15','15','15']"
                             data-y="['440','340','300','210']" data-voffset="['0','0','0','0']"
                             data-responsive_offset="on"
                             data-transform_idle="o:1;"
                             data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="1600">
                            <a href="#." class="btn-border-white text-uppercase border_radius">our services</a>
                            <a href="#." class="text-uppercase border_radius btn-green">Get a quote</a>
                        </div>
                    </div>
                </li>
                <li data-transition="fade">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('images/home/slider/1.jpeg') }}" alt="" data-bgposition="center center"
                         data-bgfit="cover">
                    <!-- LAYER NR. 1 -->
                    <div class="hidden">
                        <h1 class="tp-caption tp-resizeme uppercase text-center"
                            data-x="['center','center','center','center']" data-hoffset="['0','15','15','15']"
                            data-y="['300','200','180','130']" data-voffset="['0','0','0','0']"
                            data-responsive_offset="on"
                            data-transform_idle="o:1;"
                            data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-start="1000"><span class="white_t">Financial </span> <strong
                                class="blue_t">Services</strong>
                        </h1>
                        <div class="tp-caption tp-resizeme text-center"
                             data-x="['center','center','center','center']" data-hoffset="['0','15','15','15']"
                             data-y="['365','265','240','205']" data-voffset="['0','0','0','0']"
                             data-responsive_offset="on"
                             data-transform_idle="o:1;"
                             data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="1300"><p class="white_t">We offer the most complete house renovating services
                                in the country, from kitchen
                                <br> design to bathroom remodeling.</p>
                        </div>
                        <div class="tp-caption tp-resizeme text-center"
                             data-x="['center','center','center','center']" data-hoffset="['0','15','15','15']"
                             data-y="['440','340','300','210']" data-voffset="['0','0','0','0']"
                             data-responsive_offset="on"
                             data-transform_idle="o:1;"
                             data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="1600">
                            <a href="#." class="btn-border-white text-uppercase border_radius">our services</a>
                            <a href="#." class="text-uppercase border_radius btn-green">Get a quote</a>
                        </div>
                    </div>
                </li>
                <li data-transition="fade">
                    <img src="{{ asset('images/home/slider/3.jpeg') }}" alt="" data-bgposition="center center"
                         data-bgfit="cover">
                    <div class="hidden">
                        <h1 class="tp-caption tp-resizeme uppercase text-center"
                            data-x="['center','center','center','center']" data-hoffset="['0','15','15','15']"
                            data-y="['300','200','180','130']" data-voffset="['0','0','0','0']"
                            data-responsive_offset="on"
                            data-transform_idle="o:1;"
                            data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-start="1000"><span class="white_t">Financial </span> <strong
                                class="blue_t">Services</strong>
                        </h1>
                        <div class="tp-caption tp-resizeme text-center"
                             data-x="['center','center','center','center']" data-hoffset="['0','15','15','15']"
                             data-y="['365','265','240','205']" data-voffset="['0','0','0','0']"
                             data-responsive_offset="on"
                             data-transform_idle="o:1;"
                             data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="1300"><p class="white_t">We offer the most complete house renovating services
                                in the country, from kitchen
                                <br> design to bathroom remodeling.</p>
                        </div>
                        <div class="tp-caption tp-resizeme text-center"
                             data-x="['center','center','center','center']" data-hoffset="['0','15','15','15']"
                             data-y="['440','340','300','210']" data-voffset="['0','0','0','0']"
                             data-responsive_offset="on"
                             data-transform_idle="o:1;"
                             data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;"
                             data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="1600">
                            <a href="#." class="btn-border-white text-uppercase border_radius">our services</a>
                            <a href="#." class="text-uppercase border_radius btn-green">Get a quote</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!--Three columns text Info-->
    <section id="info" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center wow fadeInDown">
                    <h2 class="text-capitalize bottom10"><span class="blue_t">Services</span> We Provide</h2>
                    <p class="heading_space">A Quality Experience Team with 4 years experience,</p>
                </div>
            </div>
            <div class="row info">
                <div class="col-sm-4 icon_box text-center first wow fadeIn" data-wow-delay="500ms">
                    <i class="icon-desktop bottom20"></i>
                    <h4 class="bottom10">Translation</h4>
                    <p>
                        At the core of the Apacling team are our highly skilled and experienced in-house translators.
                    </p>
                </div>
                <div class="col-sm-4 icon_box text-center wow fadeIn" data-wow-delay="600ms">
                    <i class="icon-lightbulb bottom20"></i>
                    <h4 class="bottom10">Software Engineering</h4>
                    <p>
                        The second major component of the <span class="blue_t">Apacling</span> localization team is our
                        well-trained team.
                    </p>
                </div>
                <div class="col-sm-4 icon_box text-center wow fadeIn" data-wow-delay="700ms">
                    <i class="icon-layers bottom20"></i>
                    <h4 class="bottom10">LOCALIZATION</h4>
                    <p>
                        With localization Apacling takes translation one step further.
                    </p>
                </div>
                <div class="col-sm-4 icon_box text-center first wow fadeIn" data-wow-delay="800ms">
                    <i class="icon-like bottom20"></i>
                    <h4 class="bottom10">DTP</h4>
                    <p>
                        Our in-house Desktop publishing (DTP) experts are the third vital component of our teams.
                    </p>
                </div>
                <div class="col-sm-4 icon_box text-center wow fadeIn" data-wow-delay="900ms">
                    <i class="icon-piechart bottom20"></i>
                    <h4 class="bottom10">Operational Checkup</h4>
                    <p>
                        Our in-house Desktop publishing (DTP) experts are the third vital component of our teams.
                    </p>
                </div>
                <div class="col-sm-4 icon_box text-center wow fadeIn" data-wow-delay="1000ms">
                    <i class="icon-paintbrush bottom20"></i>
                    <h4 class="bottom10">Small Budgets</h4>
                    <p>
                        Our in-house Desktop publishing (DTP) experts are the third vital component of our teams.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--info text ends-->

    <!--Good Plan-->
    <section id="plans" class="padding-top hidden">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center wow fadeInDown">
                    <h2 class="text-capitalize bottom10">Work <span class="blue_t">Process</span></h2>
                    <p>Phasellus lorem enim, luctus ut velit eget, convallis egestas eros.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 content_left top40">
                    <figure><img src="images/plan2.png" alt="Good Plans" class="img-responsive"></figure>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 right top40">
                    <p class="bottom20">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare
                        ligula eget tortor tempor, quis porta tellus dictum. Phasellus lorem enim, luctus ut velit eget,
                        convallis egestas eros.</p>
                    <h4 class="bottom10">Planning One</h4>
                    <p class="bottom20">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare
                        ligula eget tortor tempor, quis porta tellus dictum. Phasellus lorem enim, luctus ut velit eget,
                        convallis egestas eros.</p>
                    <h4 class="bottom10">Planning Two</h4>
                    <p class="bottom20">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare
                        ligula eget tortor tempor, quis porta tellus dictum. Phasellus lorem enim, luctus ut velit eget,
                        convallis egestas eros.</p>
                    <a href="#." class="text-uppercase border_radius btn-green">read more</a>
                </div>
            </div>
        </div>
    </section>
    <!--Good Plans ends-->

    <!--Facts Counter & Grid-->
    <section id="facts" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="wow fadeInDown">
                        <h2 class="bottom10 text-capitalize">We’ll help you to grow <span
                                class="blue_t">your business</span></h2>
                        <p class="tagline heading_space hidden">Phasellus lorem enim, luctus ut velit eget, convallis
                            egestas
                            eros. Sed ornare ligula eget tortor tempor, quis porta tellus dictum. Phasellus lorem enim
                            luctus ut velit eget.</p>
                    </div>
                    <div class="number-counters">
                        <div class="counters-item heading_space wow fadeIn" data-wow-delay="500ms">
                            <p class="data"><strong data-to="50">0</strong><sub>M</sub></p>
                            <!-- Set Your Number here. i,e. data-to="56" -->
                            <p>Translated Words</p>
                        </div>
                        <div class="counters-item heading_space wow fadeIn" data-wow-delay="600ms">
                            <p class="data"><strong data-to="12">0</strong><sub>k</sub></p>
                            <p>Happy Clients</p>
                        </div>
                        <div class="counters-item heading_space wow fadeIn" data-wow-delay="600ms">
                            <p class="data"><strong data-to="940">0</strong></p>
                            <p>Projects</p>
                        </div>
                        <div class="counters-item heading_space wow fadeIn" data-wow-delay="700ms">
                            <p class="data"><strong data-to="100">0</strong><sub>%</sub></p>
                            <p>Task delivery</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="grid_layout" class="cbp cbp-l-grid-mosaic-flat">
                <div class="cbp-item">
                    <a href="images/grid1.jpg" class="cbp-lightbox">
                        <img src="images/grid1.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay_inner">
                                <h4>Business Graph</h4>
                                <p>convallis egestas eros Sed ornare</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item">
                    <a href="images/grid3.jpg" class="cbp-lightbox">
                        <img src="images/grid3.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay_inner">
                                <h4>Business Graph</h4>
                                <p>convallis egestas eros Sed ornare</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item">
                    <a href="images/grid3.jpg" class="cbp-lightbox">
                        <img src="images/grid1.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay_inner">
                                <h4>Business Graph</h4>
                                <p>convallis egestas eros Sed ornare</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item">
                    <a href="himages/grid3.jpg" class="cbp-lightbox">
                        <img src="images/grid1.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay_inner">
                                <h4>Business Graph</h4>
                                <p>convallis egestas eros Sed ornare</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item">
                    <a href="images/grid3.jpg" class="cbp-lightbox">
                        <img src="images/grid1.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay_inner">
                                <h4>Business Graph</h4>
                                <p>convallis egestas eros Sed ornare</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--Facts & Counters-->

    <!--Video-->
    <section id="bg-video" class="padding">
        <div class="container">
            <div class="row landing-wrapper">
                <div class="col-sm-6 video wow fadeInLeft" style="padding: 0" data-wow-delay="500ms">
                    <img src="{{ asset('images/home/video.jpg') }}" alt="video">
                    <a href="https://player.vimeo.com/video/102732914?title=0&amp;byline=0&amp;portrait=0&amp;color=8ac832&amp;wmode=opaque"
                       class="html5lightbox video-btn" data-width="900" data-height="420" title=""><i
                            class="icon-play2"></i></a>
                </div>
                <div class="col-sm-6 right_content top40 bottom40 wow fadeInRight" data-wow-delay="500ms">
                    <h2 class="bottom30 text-capitalize">Know More About <span class="green_t">Our Company</span></h2>
                    <p class="bottom30">
                        Apacling is amongst the leading translation and localisation companies in Asia. Based in the
                        Malaysia, we have offices in a number of different locations which enables us to remain in touch
                        with all local demands, needs and requirements.
                    </p>
                    <p class="bottom30">
                        Millions of Translated Words. Powerful Translation.
                    </p>
                    <a href="{{ route('services') }}" class="btn-white text-uppercase border_radius">get started</a>
                </div>
            </div>
        </div>
    </section>
    <!--Video ends-->

    <!--Call Back Form-->
    <section class="parallax_one padding hidden">
        <div class="container">
            <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                    <div class="bg_call border_radius wow fadeInRight">
                        <h2 class="bottom10 text-center">Request a <span class="blue_t">Call Back</span></h2>
                        <p class="text-center bottom20">If you need to speak to us about a general query fill in the
                            form below and we will call you back within the same working day.</p>
                        <form class="callus">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <input type="tel" class="form-control" placeholder="Phone Number">
                                </div>
                                <div class="col-sm-12 form-group">
                                    <div class="select border_radius">
                                        <select id="discuss">
                                            <option selected>Discussions with Financial Experts</option>
                                            <option>Discussions with Financial Experts</option>
                                            <option>Discussions with Financial Experts</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn-green top10 border_radius text-uppercase">Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Call Form ends-->

    <!--People Saying-->
    <section id="people" class="padding hidden">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center wow fadeInDown">
                    <h2 class="bottom10 text-capitalize">What people are <span class="blue_t">Saying</span></h2>
                    <p class="heading_space">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros Sed
                        ornare
                        ligula eget tortor tempor.</p>
                </div>
            </div>
            <div id="people_slider" class="owl-carousel">
                <div class="item">
                    <div class="people_wrap border_radius left">
                        <i class="icon-quotes-right"></i>
                        <p>Phasellus lorem enim, luctus ut velit eget, convallis egestas eros Sed ornare ligula eget
                            tortor tempor dictum. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="testinomial_pic">
                        <div class="pic"><img alt="testinomial" src="images/testnimial2.png"></div>
                        <div class="testinomial_body">
                            <span class="name">John Smith</span>
                            <span class="post_img">Client</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="people_wrap border_radius right">
                        <i class="icon-quotes-right"></i>
                        <p>Phasellus lorem enim, luctus ut velit eget, convallis egestas eros Sed ornare ligula eget
                            tortor tempor dictum. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="testinomial_pic text-right pull-right">
                        <div class="testinomial_body">
                            <span class="name">Ellizabeth Taylor</span>
                            <span class="post_img">Client</span>
                        </div>
                        <div class="pic"><img alt="testinomial" src="images/testnimial3.png"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="people_wrap border_radius left">
                        <i class="icon-quotes-right"></i>
                        <p>Phasellus lorem enim, luctus ut velit eget, convallis egestas eros Sed ornare ligula eget
                            tortor tempor dictum. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="testinomial_pic">
                        <div class="pic"><img alt="testinomial" src="images/testnimial4.png"></div>
                        <div class="testinomial_body">
                            <span class="name">John Smith</span>
                            <span class="post_img">Client</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="people_wrap border_radius right">
                        <i class="icon-quotes-right"></i>
                        <p>Phasellus lorem enim, luctus ut velit eget, convallis egestas eros Sed ornare ligula eget
                            tortor tempor dictum. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="testinomial_pic text-right pull-right">
                        <div class="testinomial_body">
                            <span class="name">John Smith</span>
                            <span class="post_img">Client</span>
                        </div>
                        <div class="pic"><img alt="testinomial" src="images/testnimial1.png"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="people_wrap border_radius left">
                        <i class="icon-quotes-right"></i>
                        <p>Phasellus lorem enim, luctus ut velit eget, convallis egestas eros Sed ornare ligula eget
                            tortor tempor dictum. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="testinomial_pic">
                        <div class="pic"><img alt="testinomial" src="images/testnimial5.png"></div>
                        <div class="testinomial_body">
                            <span class="name">John Tylone</span>
                            <span class="post_img">Client</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="people_wrap border_radius right">
                        <i class="icon-quotes-right"></i>
                        <p>Phasellus lorem enim, luctus ut velit eget, convallis egestas eros Sed ornare ligula eget
                            tortor tempor dictum. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="testinomial_pic text-right pull-right">
                        <div class="testinomial_body">
                            <span class="name">John Smith</span>
                            <span class="post_img">Client</span>
                        </div>
                        <div class="pic"><img alt="testinomial" src="images/testnimial6.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--People Saying ends-->

    <!--News & Thoughts-->
    <section id="news" class="padding light layout_third hidden">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center wow fadeInDown">
                    <h2 class="bottom10 text-capitalize">News & <span class="blue_t">Thoughts </span></h2>
                    <p class="heading_space">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros Sed
                        ornare ligula eget tortor tempor.</p>
                </div>
            </div>
            <div class="row">
                <div id="news_slider" class="owl-carousel">
                    <div class="item">
                        <div class="news">
                            <div class="image"><img src="images/news1.jpg" alt="News"></div>
                            <div class="news_text">
                                <h4 class="bottom10"><a href="news_detail.html">Ellizabeth Taylor</a></h4>
                                <p class="bottom30">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros.
                                    Sed
                                    ornare ligula eget tortor tempor dictum.</p>
                                <ul class="news_crumb">
                                    <li><a href="#.">John Smith</a></li>
                                    <li><a href="#.">july 25, 2016</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="news">
                            <div class="image"><img src="images/news2.jpg" alt="News"></div>
                            <div class="news_text">
                                <h4 class="bottom10"><a href="news_detail.html">Increasing Productivity</a></h4>
                                <p class="bottom30">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros.
                                    Sed ornare ligula eget tortor tempor dictum.</p>
                                <ul class="news_crumb">
                                    <li><a href="#.">John Smith</a></li>
                                    <li><a href="#.">july 25, 2016</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="news">
                            <div class="image"><img src="images/news3.jpg" alt="News"></div>
                            <div class="news_text">
                                <h4 class="bottom10"><a href="news_detail.html">Gallery Post</a></h4>
                                <p class="bottom30">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros.
                                    Sed ornare ligula eget tortor tempor dictum.</p>
                                <ul class="news_crumb">
                                    <li><a href="#.">John Smith</a></li>
                                    <li><a href="#.">july 25, 2016</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="news">
                            <div class="image"><img src="images/news1.jpg" alt="News"></div>
                            <div class="news_text">
                                <h4 class="bottom10"><a href="news_detail.html">Ellizabeth Taylor</a></h4>
                                <p class="bottom30">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros.
                                    Sed ornare ligula eget tortor tempor dictum.</p>
                                <ul class="news_crumb">
                                    <li><a href="#.">John Smith</a></li>
                                    <li><a href="#.">july 25, 2016</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="news">
                            <div class="image"><img src="images/news2.jpg" alt="News"></div>
                            <div class="news_text">
                                <h4 class="bottom10"><a href="news_detail.html">Increasing Productivity</a></h4>
                                <p class="bottom30">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros.
                                    Sed ornare ligula eget tortor tempor dictum.</p>
                                <ul class="news_crumb">
                                    <li><a href="#.">John Smith</a></li>
                                    <li><a href="#.">july 25, 2016</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="news">
                            <div class="image"><img src="images/news3.jpg" alt="News"></div>
                            <div class="news_text">
                                <h4 class="bottom10"><a href="news_detail.html">Gallery Post</a></h4>
                                <p class="bottom30">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros.
                                    Sed ornare ligula eget tortor tempor dictum.</p>
                                <ul class="news_crumb">
                                    <li><a href="#.">John Smith</a></li>
                                    <li><a href="#.">july 25, 2016</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="news">
                            <div class="image"><img src="images/news1.jpg" alt="News"></div>
                            <div class="news_text">
                                <h4 class="bottom10"><a href="news_detail.html">Ellizabeth Taylor</a></h4>
                                <p class="bottom30">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros.
                                    Sed ornare ligula eget tortor tempor dictum.</p>
                                <ul class="news_crumb">
                                    <li><a href="#.">John Smith</a></li>
                                    <li><a href="#.">july 25, 2016</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="news">
                            <div class="image"><img src="images/news2.jpg" alt="News"></div>
                            <div class="news_text">
                                <h4 class="bottom10"><a href="news_detail.html">Gallery Post</a></h4>
                                <p class="bottom30">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros.
                                    Sed ornare ligula eget tortor tempor dictum.</p>
                                <ul class="news_crumb">
                                    <li><a href="#.">John Smith</a></li>
                                    <li><a href="#.">july 25, 2016</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News & Thought ends-->

    <!--Partners-->
    <section id="partner" class="padding-bottom-half padding-top hidden">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center wow fadeInDown">
                    <h2 class="text-capitalize bottom10"> Our <span class="blue_t">Partners</span></h2>
                    <p class="heading_space">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros Sed
                        ornare ligula eget tortor tempor.</p>
                </div>
            </div>
            <div class="row">
                <div id="logo_slider" class="owl-carousel">
                    <div class="item"><img src="images/logo1.png" alt="our Partner"></div>
                    <div class="item"><img src="images/logo2.png" alt="our Partner"></div>
                    <div class="item"><img src="images/logo3.png" alt="our Partner"></div>
                    <div class="item"><img src="images/logo4.png" alt="our Partner"></div>
                    <div class="item"><img src="images/logo5.png" alt="our Partner"></div>
                    <div class="item"><img src="images/logo1.png" alt="our Partner"></div>
                    <div class="item"><img src="images/logo2.png" alt="our Partner"></div>
                    <div class="item"><img src="images/logo3.png" alt="our Partner"></div>
                    <div class="item"><img src="images/logo4.png" alt="our Partner"></div>
                    <div class="item"><img src="images/logo5.png" alt="our Partner"></div>
                    <div class="item"><img src="images/logo1.png" alt="our Partner"></div>
                    <div class="item"><img src="images/logo2.png" alt="our Partner"></div>
                    <div class="item"><img src="images/logo3.png" alt="our Partner"></div>
                    <div class="item"><img src="images/logo4.png" alt="our Partner"></div>
                    <div class="item"><img src="images/logo5.png" alt="our Partner"></div>
                </div>
            </div>
        </div>
    </section>
    <!--Partner ends-->

    <!--Contact Info-->
    <div class="container bg_contact bg_one border_radius wow bounceInUp">
        <div class="row">
            <div class="col-sm-3">
                <div class="contact_inner">
                    <i class="icon-phone4"></i>
                    <h5><strong>(+01) 333-444-4567</strong></h5>
                    <a href="#.">contact@website.com</a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="contact_inner">
                    <i class="icon-icons20"></i>
                    <h5><strong>Mon - Sat 8.00 - 17.00</strong></h5>
                    <h5>Sunday Closed</h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="contact_inner">
                    <i class="icon-location"></i>
                    <h5><strong>(8th floor, 379 Hudson St</strong></h5>
                    <h5>New York, NY 10018</h5>
                </div>
            </div>
        </div>
    </div>
    <!--Contact info ends-->
@endsection

@section('page_scripts')
@endsection
