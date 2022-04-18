@extends('website.layout')

@section('page_title')
    Services
@endsection

@section('page_styles')
@endsection

<?php
$banner_path = 0;

$ids = ["0", "1", "2", "3", "4", "5"];
$titles = ["Translation", "Localization", "DTP", "Software Engineering", "MTPE", "Localization Engineering"];
$descriptions = [
    "At the core of the Apacling team are our highly skilled and experienced in-house translators. Not only are they native-speakers, but also have many years of translation experience.",
    "With localization Apacling takes translation one step further, and not only ensures that the language we use suits the target market, but also that the product as a whole is adapted to give it local appeal.",
    "Our in-house Desktop publishing (DTP) experts are the third vital component of our teams. They make a major contribution to Apacling’ localization success through their accurate, detailed, and professional work.",
    "The second major component of the Apacling localization team is our well-trained team of software engineering experts.",
    "Machine translation post editing. It combines human accuracy with machine translation high speed",
    "Facilitates the entire process of localization. planning and execution workflow of exporting, translating, and re-integrating content and data for websites, apps, or e-learning modules .",
];
$images = ["images/services/in/0.jpeg", "images/services/in/2.webp", "images/services/in/1.webp", "images/services/in/4.webp", "images/services/in/3.webp", "images/services/in/5.webp"];
?>

@section('page_content')
    <section class="page_header">
        <div class="container">
            <div class="row" style="margin-top: 80px">
                <div class="col-sm-12 text-center">
                    <p>What We Provide</p>
                    <h1 class="text-uppercase">{{ $titles[request()->route('id')] }} Service</h1>
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
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li class="active">Service Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

{{--    {{ request()->route('id') }}--}}

    <!--Services-->
    <section id="service" class="padding">
        <div class="container services">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="tab_container">
                        <h3 class="d_active tab_drawer_heading" rel="tab1">{{ $titles[request()->route('id')] }}</h3>
                        <div id="tab1" class="tab_content">
                            <div class="services_content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="{{ asset($images[request()->route('id')]) }}" alt="img" class="img img-responsive" style="margin: 0 auto;">
                                    </div>
                                    <div class="col-md-4 hidden">
                                        <div class="owl-carousel bottom20" id="service_slider">
                                            <div class="item">
                                                <h4 class="bottom20">We Have Essential Plans For Commodities
                                                    Trading.</h4>
                                                <h4 class="bottom15"><span
                                                        class="blue_t">1) What is Investments ?</span></h4>
                                                <p class="bottom10">Nulla commodo iaculis ligula, ac dapibus quam ornare
                                                    ut. Praesent
                                                    ac hendrerit sem, et tempus sem. Donec sit amet elit a felis
                                                    tristique eleifend.
                                                    Cras metus ipsum erat volutpat.</p>
                                            </div>
                                            <div class="item">
                                                <h4 class="bottom20">We Have Essential Plans For Commodities
                                                    Trading.</h4>
                                                <h4 class="bottom15"><span
                                                        class="blue_t">1) What is Investments ?</span></h4>
                                                <p class="bottom10">Nulla commodo iaculis ligula, ac dapibus quam ornare
                                                    ut. Praesent
                                                    ac hendrerit sem, et tempus sem. Donec sit amet elit a felis
                                                    tristique eleifend.
                                                    Cras metus ipsum erat volutpat.</p>
                                            </div>
                                            <div class="item">
                                                <h4 class="bottom20">We Have Essential Plans For Commodities
                                                    Trading.</h4>
                                                <h4 class="bottom15"><span
                                                        class="blue_t">1) What is Investments ?</span></h4>
                                                <p class="bottom10">Nulla commodo iaculis ligula, ac dapibus quam ornare
                                                    ut. Praesent
                                                    ac hendrerit sem, et tempus sem. Donec sit amet elit a felis
                                                    tristique eleifend.
                                                    Cras metus ipsum erat volutpat.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h3 class="bottom20">{{ $titles[request()->route('id')] }} Service</h3>
                                <p class="bottom30">
                                    {{ $descriptions[request()->route('id')] }}
                                </p>
                                <p class="bottom40">
                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                    here, content here', making it look like readable English.
                                </p>

                                <p class="bottom40">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                    default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                    in their infancy. Various versions have evolved over the years, sometimes by
                                    accident, sometimes on purpose (injected humour and the like).
                                </p>

                                <div class="row hidden">
                                    <div class="col-md-12">
                                        <h2 class="bottom10">Key<span class="blue_t">Benefits</span></h2>
                                        <p class="bottom15">Phasellus lorem enim, luctus ut velit eget.</p>
                                        <div class="accordion-container">
                                            <div class="accordion_title"><a href="javascript:void(0)" class="active">Title
                                                    Here<i class="fa fa-plus"></i></a>
                                                <div class="content" style="display:block;">
                                                    <p class="bottom20">Alienum phaedrum torquatos nec eu, vis detraxit
                                                        periculis ex, nihil expetendis in mei. Mei an pericula
                                                        euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri
                                                        consequat
                                                        an.</p>
                                                    <p class="bottom0">Eius lorem tincidunt vix at, vel pertinax
                                                        sensibus id, error epicurei
                                                        mea et.</p>
                                                </div>
                                            </div>
                                            <div class="accordion_title"><a href="javascript:void(0)">Title Here<i
                                                        class="fa fa-plus"></i></a>
                                                <div class="content">
                                                    <p class="bottom20">Alienum phaedrum torquatos nec eu, vis detraxit
                                                        periculis ex, nihil expetendis in mei. Mei an pericula
                                                        euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri
                                                        consequat an.</p>
                                                    <p class="bottom0">Eius lorem tincidunt vix at, vel pertinax
                                                        sensibus id, error epicurei mea et.</p>
                                                </div>
                                            </div>
                                            <div class="accordion_title"><a href="javascript:void(0)">Title Here <i
                                                        class="fa fa-plus"></i></a>
                                                <div class="content">
                                                    <p class="bottom20">Alienum phaedrum torquatos nec eu, vis detraxit
                                                        periculis ex, nihil expetendis in mei. Mei an pericula
                                                        euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri
                                                        consequat an.</p>
                                                    <p class="bottom0">Eius lorem tincidunt vix at, vel pertinax
                                                        sensibus id, error epicurei mea et.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Services Ends-->

@endsection

@section('page_scripts')
@endsection
