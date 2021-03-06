@extends('website.layout')

@section('page_title')
    About
@endsection

@section('page_styles')
@endsection

@section('page_scripts')
@endsection

<?php
$banner_path = 0;
?>

@section('page_content')
    <section class="page_header">
        <div class="container">
            <div class="row" style="margin-top: 80px">
                <div class="col-sm-12 text-center">
                    <p>Who We Are</p>
                    <h1 class="text-uppercase"> About Us</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="page_linker">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="icon-home6"></i>Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--About Us-->
    <section id="about" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 padding-bottom">
                    <img src="{{ asset('images/about/3.jpg') }}" alt="About Us" class="img-responsive">
                </div>
                <div class="col-sm-6 about_right padding-bottom">
                    <h2 class="bottom10">We Innovate & <span class="blue_t">Design</span></h2>
                    <p class="bottom30">
                        Quality Comes First: 15 Years of experience in providing translation services to global
                        partners and trusted by most of top 100 global language providers.
                        Trusted by most of top 100 global language providers.
                    </p>
                    <p class="bottom30">
                        In-house & in-country specialists with more than 7 years of translation
                        experience.
                    </p>
                    <p class="bottom30">
                        You can join our team by sending your CV and qualifications to
                        <span class="blue_t">vendor_management@apacling.com</span>
                    </p>

                    <ul class="check hidden">
                        <li><i class="icon-check"></i>Mei an pericula euripidis, hinc partem ei est.</li>
                        <li><i class="icon-check"></i>Eos ei nisl graecis acer sell well.</li>
                        <li><i class="icon-check"></i>Alienum phaedrum torquatos lorem fact.</li>
                    </ul>
                    <div class="number-counters text-center">
                        <div class="counters-item top15">
                            <p class="data"><strong data-to="50">0</strong><sub>m</sub></p>
                            <p>Translated Words</p>
                        </div>
                        <div class="counters-item top15">
                            <p class="data"><strong data-to="12">0</strong><sub>k</sub></p>
                            <p>Happy Clients</p>
                        </div>
                        <div class="counters-item top15">
                            <p class="data"><strong data-to="100">0</strong><sub>%</sub></p>
                            <p>Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Quality Fine-->
    <section id="quality" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Quality Comes First</h2>
                    <p class="heading_space hidden">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros
                        Sed
                        ornare ligula eget tortor tempor.</p>
                    <br>
                    <br>
                    <br>
                </div>
                <div class="clearfix"></div>
                <div class="quality_wrap clearfix">
                    <div class="col-md-6">
                        <div class="left"><img src="{{ asset('images/about/2.jpg') }}" alt="quality"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="right">
                            <div class="media">
                                <div class="media-left">
                                    <div class="media-object"><span>1</span></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="bottom10">Our Capabilities</h4>
                                    <p class="bottom15">
                                        From document translation and proofreading to website translation and
                                        localization, Apacling has the capabilities and expertise to manage your
                                        projects from A to Z, handling all types of content, documents, and file
                                        formats, delivering quality under tight deadlines.
                                    </p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <div class="media-object"><span>2</span></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="bottom10">We are Best at</h4>
                                    <p class="bottom15">
                                        We are committed to providing with the highest quality translations at the most
                                        competitive prices in the industry.
                                    </p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <div class="media-object"><span>3</span></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="bottom10">How We Accomplish</h4>
                                    <p>
                                        Through dedicated staff, we provide our clients with top-notch customer service
                                        and care. Our friendly and knowledgeable team is available around the clock,
                                        including weekends and major holidays. We train our staff to take ownership of
                                        our clients??? goals throughout translation process.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Quality fine ends-->


    <!--What We DO-->
    <section id="wedo" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>What We<span class="blue_t">Do</span></h2>
                    <p class="heading_space hidden">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros
                        Sed
                        ornare
                        ligula eget tortor tempor.</p>
                    <hr>
                    <br>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-6">
                    <div class="accordion-container bottom40">
                        <div class="accordion_title"><a href="javascript:void(0)" class="active">Our Mission<i
                                    class="fa fa-plus"></i></a>
                            <div class="content" style="display:block;">
                                <p class="bottom20">
                                    our mission is to grow a translation company with a solid infrastructure of great
                                    people, and advanced communication with our main objective of providing
                                    extraordinary customer service and professional, high-quality language-related
                                    solutions that connect our clients to the world.
                                </p>
                            </div>
                        </div>
                        <div class="accordion_title"><a href="javascript:void(0)">Our Goals<i
                                    class="fa fa-plus"></i></a>
                            <div class="content">
                                <p class="bottom20">
                                    Improve a worldwide communication through accurate, localized translation services,
                                    and a wide range of customized language solutions for organizations, and businesses
                                    of all sizes.
                                </p>
                            </div>
                        </div>
                        <div class="accordion_title hidden"><a href="javascript:void(0)">About Fin Growth <i
                                    class="fa fa-plus"></i></a>
                            <div class="content">
                                <p class="bottom20">Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil
                                    expetendis
                                    in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix
                                    aperiri consequat an.
                                    Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et.</p>
                                <p class="bottom0">Vis ei rationibus definiebas, eu qui purto zril laoreet. Ex error
                                    omnium
                                    interpretaris pro, alia illum ea vim.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="do_media media bottom40">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="{{ asset('images/about/1.webp') }}" alt=".We Do">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="bottom10">Always Available</h4>
                            <p class="heading_space">
                                We work around the clock in order to fulfill our clients??? requirements all over the
                                world.
                            </p>
                            <h4 class="bottom10">Qualified Agents</h4>
                            <p class="heading_space">
                                Our team of translators and reviewers are experts in their native languages. We have
                                professional experts in many specializations
                            </p>
                            <h4 class="bottom10">Best Offers</h4>
                            <p>
                                With very competitive prices, we tend to offer our clients the best service with the
                                most efficient rates can be offered in the market.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--We Do ends-->


    <!--Contact Info-->
    <div class="container bg_contact bg_one border_radius">
        <div class="row">
            <div class="col-sm-3">
                <div class="contact_inner"><i class="icon-phone4"></i>
                    <h5><strong>+60 03-2299 4400</strong></h5>
                    <a href="javascript:void(0)">info@apacling.com</a></div>
            </div>
            <div class="col-sm-3"></div>
            <div class="col-sm-6" style="padding-left: 100px">
                <div class="contact_inner"><i class="icon-location"></i>
                    <h5><strong>30-5-1 JALAN 5/101C, CHERAS BUSINESS CENTER</strong></h5>
                    <h5>TAMAN CHERAS, 56100 KUALA LUMPUR, MALAYSIA</h5>
                </div>
            </div>
        </div>
    </div>
@endsection
