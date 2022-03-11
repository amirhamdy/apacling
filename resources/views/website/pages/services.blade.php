@extends('website.layout')

@section('page_title')
    Services
@endsection

@section('page_styles')
@endsection

<?php
$banner_path = 0;
?>

@section('page_content')
    <section class="page_header">
        <div class="container">
            <div class="row" style="margin-top: 80px">
                <div class="col-sm-12 text-center">
                    <p>What We Provide</p>
                    <h1 class="text-uppercase"> Services</h1>
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
                        <li class="active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--SERVICES-->
    <section id="team" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="service_wrap heading_space">
                        <div class="image bottom10">
                            <img src="images/service1.jpg" alt="our Team">
                            <div class="overlay">
                                <a href="services_detail.html" class="overlay_center border_radius"><i
                                        class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <h3 class="bottom10">Financial Planning</h3>
                        <p class="bottom15">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros.
                            Sed ornare ligula Progressively generate synergistic eget.</p>
                        <a href="services_detail.html" class="btn-border border_radius text-uppercase">Learn More</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="service_wrap heading_space">
                        <div class="image bottom10">
                            <img src="images/service2.jpg" alt="our Team">
                            <div class="overlay">
                                <a href="services_detail.html" class="overlay_center border_radius"><i
                                        class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <h3 class="bottom10">Taxes Planning</h3>
                        <p class="bottom15">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros.
                            Sed ornare ligula Progressively generate synergistic eget.</p>
                        <a href="services_detail.html" class="btn-border border_radius text-uppercase">Learn More</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="service_wrap heading_space">
                        <div class="image bottom10">
                            <img src="images/service3.jpg" alt="our Team">
                            <div class="overlay">
                                <a href="services_detail.html" class="overlay_center border_radius"><i
                                        class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <h3 class="bottom10">Investments Management</h3>
                        <p class="bottom15">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros.
                            Sed ornare ligula Progressively generate synergistic eget.</p>
                        <a href="services_detail.html" class="btn-border border_radius text-uppercase">Learn More</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="service_wrap heading_space">
                        <div class="image bottom10">
                            <img src="images/service4.jpg" alt="our Team">
                            <div class="overlay">
                                <a href="services_detail.html" class="overlay_center border_radius"><i
                                        class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <h3 class="bottom10">Car Insurance</h3>
                        <p class="bottom15">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros.
                            Sed ornare ligula Progressively generate synergistic eget.</p>
                        <a href="services_detail.html" class="btn-border border_radius text-uppercase">Learn More</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="service_wrap heading_space">
                        <div class="image bottom10">
                            <img src="images/service5.jpg" alt="our Team">
                            <div class="overlay">
                                <a href="services_detail.html" class="overlay_center border_radius"><i
                                        class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <h3 class="bottom10">Business Loan</h3>
                        <p class="bottom15">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros.
                            Sed ornare ligula Progressively generate synergistic eget.</p>
                        <a href="services_detail.html" class="btn-border border_radius text-uppercase">Learn More</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="service_wrap heading_space">
                        <div class="image bottom10">
                            <img src="images/service6.jpg" alt="our Team">
                            <div class="overlay">
                                <a href="services_detail.html" class="overlay_center border_radius"><i
                                        class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <h3 class="bottom10">Future Planning Services</h3>
                        <p class="bottom15">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros.
                            Sed ornare ligula Progressively generate synergistic eget.</p>
                        <a href="services_detail.html" class="btn-border border_radius text-uppercase">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICES ends -->

@endsection

@section('page_scripts')
@endsection
