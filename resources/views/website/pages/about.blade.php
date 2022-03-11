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
                <div class="col-sm-6 padding-bottom"><img src="{{ asset('images/about/1.jpg') }}" alt="About Us"
                                                          class="img-responsive">
                </div>
                <div class="col-sm-6 about_right padding-bottom">
                    <h2 class="bottom10">We Innovate & <span class="blue_t">Design</span></h2>
                    <p class="bottom30">
                        Apacling is amongst the leading translation and localisation companies in Asia. Based in the
                        Malaysia, we have offices in a number of different locations which enables us to remain in touch
                        with all local demands, needs and requirements. In turn, this knowledge translates to the
                        highest quality of localisation available.
                    </p>
                    <p class="bottom30">
                        Our unique position also provides us with the opportunity to offer our clients a comprehensive
                        list of services to bring a competitive edge to their products – and prepare them for any local,
                        regional or international markets.
                    </p>

                    <p class="bottom30">
                        Each Apacling branch has an extensive portfolio of services and products which can be customised
                        to suit individual budgets, business plans or deadlines. Additionally, our team will devise a
                        solution that is uniquely suited to your project requirements.
                    </p>

                    <ul class="check">
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
                    <p class="heading_space">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros Sed
                        ornare ligula eget tortor tempor.</p>
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
                                    <p class="bottom15">Phasellus lorem enim, luctus ut velit eget, convallis egestas
                                        eros. Sed ornare ligula Progressively generate synergistic luctus ut velit eget
                                        eget.</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <div class="media-object"><span>2</span></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="bottom10">We are Best at</h4>
                                    <p class="bottom15">Phasellus lorem enim, luctus ut velit eget, convallis egestas
                                        eros. Sed ornare ligula Progressively generate synergistic luctus ut velit eget
                                        eget.</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <div class="media-object"><span>3</span></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="bottom10">How We Accomplish</h4>
                                    <p>Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare
                                        ligula Progressively generate synergistic
                                        luctus ut velit eget eget.</p>
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
                    <p class="heading_space">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros Sed
                        ornare
                        ligula eget tortor tempor.</p>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-6">
                    <div class="accordion-container bottom40">
                        <div class="accordion_title"><a href="javascript:void(0)" class="active">Our Mission<i
                                    class="fa fa-plus"></i></a>
                            <div class="content" style="display:block;">
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
                        <div class="accordion_title"><a href="javascript:void(0)">Our Goals<i
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
                        <div class="accordion_title"><a href="javascript:void(0)">About Fin Growth <i
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
                        <div class="media-left"><a href="#"> <img class="media-object" src="images/wedo.jpg"
                                                                  alt=".We Do"> </a></div>
                        <div class="media-body">
                            <h4 class="bottom10">Always Available</h4>
                            <p class="heading_space">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros.
                                Sed ornare
                                ligula Progressively generate synergistic eget.</p>
                            <h4 class="bottom10">Qualified Agents</h4>
                            <p class="heading_space">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros.
                                Sed ornare
                                ligula.</p>
                            <h4 class="bottom10">Best Offers</h4>
                            <p>Phasellus lorem enim, luctus ut velit eget, convallis egestas eros. Sed ornare
                                ligula.</p>
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
                    <h5><strong>(+01) 333-444-4567</strong></h5>
                    <a href="javascript:void(0)">contact@website.com</a></div>
            </div>
            <div class="col-sm-3">
                <div class="contact_inner"><i class="icon-icons20"></i>
                    <h5><strong>Mon - Sat 8.00 - 17.00</strong></h5>
                    <h5>Sunday Closed</h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="contact_inner"><i class="icon-location"></i>
                    <h5><strong>(8th floor, 379 Hudson St</strong></h5>
                    <h5>New York, NY 10018</h5>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
@endsection
