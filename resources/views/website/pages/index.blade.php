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
        <div id="rev_slider" class="rev_slider top" data-version="5.0">
            <ul class="">
                <!-- SLIDE  -->
                <li data-transition="fade">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('images/home/slider/1.jpg') }}" alt="" data-bgposition="center center"
                         data-bgfit="cover">
                    <!-- LAYER NR. 1 -->
                    <h1 class="tp-caption  tp-resizeme uppercase"
                        data-x="['left','left','left','center']" data-hoffset="['0','15','15','15']"
                        data-y="['290','190','190','100']" data-voffset="['0','0','0','0']"
                        data-responsive_offset="on"
                        data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-start="1000"><strong class="blue_t">Apacling</strong>
                    </h1>
                    <div class="tp-caption  tp-resizeme"
                         data-x="['left','left','left','center']" data-hoffset="['0','15','15','15']"
                         data-y="['360','260','260','200']" data-voffset="['0','0','0','0']"
                         data-responsive_offset="on"
                         data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1300">
                        <p class="white_t">
                            Your local gateway to APAC region
                        </p>
                    </div>
                    <div class="tp-caption  tp-resizeme"
                         data-x="['left','left','left','center']" data-hoffset="['0','15','15','15']"
                         data-y="['410','310','290','180']" data-voffset="['0','0','0','0']"
                         data-responsive_offset="on" data-transform_idle="o:1;"
                         data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1600">
                        <a href="{{ route('services') }}" class="btn-border text-uppercase border_radius btn-white">
                            our services
                        </a>
                        <a href="{{ route('contact-us') }}" class="text-uppercase border_radius btn-green">
                            Get a quote
                        </a>
                    </div>
                </li>
                <li data-transition="fade">
                    <img src="{{ asset('images/home/slider/2.jpg') }}" alt="" data-bgposition="center center"
                         data-bgfit="cover">
                    <h1 class="tp-caption  tp-resizeme uppercase"
                        data-x="['left','left','left','center']" data-hoffset="['0','15','15','15']"
                        data-y="['290','190','190','100']" data-voffset="['0','0','0','0']"
                        data-responsive_offset="on"
                        data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-start="1000"><strong class="blue_t">Services</strong>
                    </h1>
                    <div class="tp-caption  tp-resizeme"
                         data-x="['left','left','left','center']" data-hoffset="['0','15','15','15']"
                         data-y="['360','260','260','200']" data-voffset="['0','0','0','0']"
                         data-responsive_offset="on"
                         data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1300">
                        <p class="white_t">
                            We offer the most complete house renovating services in the country, from kitchen
                        </p>
                    </div>
                    <div class="tp-caption  tp-resizeme"
                         data-x="['left','left','left','center']" data-hoffset="['0','15','15','15']"
                         data-y="['410','310','290','180']" data-voffset="['0','0','0','0']"
                         data-responsive_offset="on" data-transform_idle="o:1;"
                         data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1600">
                        <a href="{{ route('services') }}" class="btn-border text-uppercase border_radius btn-white">our services
                        </a>
                        <a href="{{ route('home') }}" class="text-uppercase border_radius btn-green">Get a quote
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--SLIDERR Ends-->

    <!--Three columns services -->
    <section id="info" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center wow fadeInDown" data-wow-delay="500ms">
                    <h2 class="text-capitalize bottom10">Services <span class="blue_t">We Provide</span></h2>
                    <p>Your local gateway to APAC region</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="text_box text-center top40 wow fadeIn" data-wow-delay="700ms">
                        <span><i class="icon-bargraph"></i></span>
                        <h4 class="bottom10">Translation</h4>
                        <p>
                            At the core of the Apacling team are our highly skilled and experienced in-house
                            translators. Not only are they native-speakers, but also have many years of translation
                            experience.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="text_box text-center top40 wow fadeIn" data-wow-delay="900ms">
                        <span><i class="icon-lightbulb"></i></span>
                        <h4 class="bottom10">Localization</h4>
                        <p>
                            With localization Apacling takes translation one step further, and not only ensures that the
                            language we use suits the target market, but also that the product as a whole is adapted to
                            give it local appeal.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="text_box  text-center top40 wow fadeIn" data-wow-delay="1100ms">
                        <span><i class="icon-piechart"></i></span>
                        <h4 class="bottom10">DTP</h4>
                        <p>
                            Our in-house Desktop publishing (DTP) experts are the third vital component of our teams.
                            They make a major contribution to Apacling’ localization success through their accurate,
                            detailed, and professional work.
                        </p>
                    </div>
                </div>
                <br>
                <div class="col-sm-4">
                    <div class="text_box text-center top40 wow fadeIn" data-wow-delay="700ms">
                        <span><i class="icon-presentation"></i></span>
                        <h4 class="bottom10">Software Engineering</h4>
                        <p>
                            The second major component of the Apacling localization team is our well-trained team of
                            software engineering experts.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="text_box text-center top40 wow fadeIn" data-wow-delay="900ms">
                        <span><i class="icon-rocket"></i></span>
                        <h4 class="bottom10">MTPE</h4>
                        <p>
                            Machine translation post editing.
                            It combines human accuracy with machine translation high speed
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="text_box  text-center top40 wow fadeIn" data-wow-delay="1100ms">
                        <span><i class="icon-map"></i></span>
                        <h4 class="bottom10">Localization Engineering</h4>
                        <p>
                            Facilitates the entire process of localization. planning and execution workflow of
                            exporting, translating, and re-integrating content and data for websites, apps, or
                            e-learning modules .
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services ends-->

    <!--Good Plan-->
    <section id="plans" class="padding light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 content_left">
                    <figure>
                        <img src="{{ asset('images/home/1.jpg') }}" alt="about" class="img-responsive">
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 content_right shadow  margin-bottom">
                    <div id="plan_slider" class="owl-carousel">
                        <div class="item">
                            <h2 class="bottom10 green_t">Start with us now</h2>
                            <p class="bottom20">
                                We provide you with our best translation and localization quality for a very low price,
                                as all our translators are native in country speakers and in-house as well. So you may
                                get the best quality and paying lowest price. Additionally, we keep always an eye on the
                                deadline desired from the customer.
                            </p>
                            <a href="{{ route('about') }}" class="btn-border text-uppercase border_radius btn-green">Read
                                More...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--GOOD PLANS-->

    <!--Facts Counter & Grid-->
    <section id="facts" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="wow fadeInDown" data-wow-delay="500ms">
                        <h2 class="bottom10 text-capitalize">We’ll help you to grow <span
                                class="blue_t">your business</span></h2>
                        <p class="tagline heading_space"></p>
                    </div>
                    <div class="number-counters">
                        <div class="counters-item heading_space wow fadeIn" data-wow-delay="700ms">
                            <p class="data"><strong data-to="50">0</strong><sub>m</sub></p>
                            <!-- Set Your Number here. i,e. data-to="56" -->
                            <p>Translated Words</p>
                        </div>
                        <div class="counters-item heading_space wow fadeIn" data-wow-delay="900ms">
                            <p class="data"><strong data-to="12">0</strong><sub>k</sub></p>
                            <p>Happy Clients</p>
                        </div>
                        <div class="counters-item heading_space wow fadeIn" data-wow-delay="1100ms">
                            <p class="data"><strong data-to="100">0</strong><sub>%</sub></p>
                            <p>Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Facts & Fun ends-->

    <!--Video-->
    <section id="bg-video" class="padding">
        <div class="container">
            <div class="row landing-wrapper">
                <div class="col-sm-6 video wow fadeInLeft" style="padding: 0" data-wow-delay="500ms">
                    <img src="{{ asset('images/home/5.jpg') }}" alt="video">
                </div>
                <div class="col-sm-6 right_content top40 bottom40 wow fadeInRight" style="padding: 0 30px;"
                     data-wow-delay="500ms">
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
    <section class="parallax_one padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <div class="bg_call border_radius wow fadeInRight" id="callform" data-wow-delay="500ms">
                        <h2 class="bottom10 text-center">Request a <span class="blue_t">Quote</span> now!</h2>
                        <p class="text-center bottom20">
                            If you need to speak to us about a general query fill in the
                            form below and we will call you back within the same working day.
                        </p>
                        <form class="callus">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <input type="text" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <input type="text" class="form-control" placeholder="Company Name" required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <input type="tel" class="form-control" placeholder="Phone Number" required/>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <input type="tel" class="form-control" placeholder="Upload File" required/>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <div class="select border_radius">
                                        <select id="discuss">
                                            <option selected>English</option>
                                            <option>Arabic</option>
                                            <option>French</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <div class="select border_radius">
                                        <select id="discuss">
                                            <option selected>Arabic</option>
                                            <option>English</option>
                                            <option>French</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn-green top10 border_radius text-uppercase">Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Call Form Ends-->

    <!--People Saying-->
    <section id="people" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center wow fadeInDown" data-wow-delay="500ms">
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
                            tortor
                            tempor dictum. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
                            tortor
                            tempor dictum. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
                            tortor
                            tempor dictum. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
                            tortor
                            tempor dictum. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
                            tortor
                            tempor dictum. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
                            tortor
                            tempor dictum. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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

    <hr>

    <!--Partners-->
    <section id="partner" class="padding-bottom-half padding-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center wow fadeInDown" data-wow-delay="500ms">
                    <h2 class="bottom10 text-capitalize"> Our <span class="blue_t">Partners</span></h2>
                    <p class="heading_space">Phasellus lorem enim, luctus ut velit eget, convallis egestas
                        eros Sed ornare ligula eget tortor tempor.</p>
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
    <!--Partner Ends-->

    <!--Contact Info-->
    <div class="container bg_contact bg_one border_radius wow bounceInUp" data-wow-delay="500ms">
        <div class="row">
            <div class="col-sm-3">
                <div class="contact_inner">
                    <i class="icon-phone4"></i>
                    <h5><strong>+60  03-2299 4400</strong></h5>
                    <a href="{{ route('home') }}">info@apacling.com</a>
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
    <!--Contact Info Ends-->
@endsection

@section('page_scripts')
@endsection
