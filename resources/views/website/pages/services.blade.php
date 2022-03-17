@extends('website.layout')

@section('page_title')
    Services
@endsection

@section('page_styles')
@endsection

<?php
$banner_path = 0;
$ids = ["1", "2", "3", "1", "2", "3"];
$titles = ["Translation", "Localization", "DTP", "Software Engineering", "MTPE", "Localization Engineering"];
$descriptions = [
    "At the core of the Apacling team are our highly skilled and experienced in-house translators. Not only are they native-speakers, but also have many years of translation experience.",
    "With localization Apacling takes translation one step further, and not only ensures that the language we use suits the target market, but also that the product as a whole is adapted to give it local appeal.",
    "Our in-house Desktop publishing (DTP) experts are the third vital component of our teams. They make a major contribution to Apacling’ localization success through their accurate, detailed, and professional work.",
    "The second major component of the Apacling localization team is our well-trained team of software engineering experts.",
    "Machine translation post editing. It combines human accuracy with machine translation high speed",
    "Facilitates the entire process of localization. planning and execution workflow of exporting, translating, and re-integrating content and data for websites, apps, or e-learning modules .",
];
$images = ["images/service1.jpg", "images/service1.jpg", "images/service1.jpg", "images/service1.jpg", "images/service1.jpg", "images/service1.jpg"];
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

                @for ($i = 0; $i < count($ids); $i++)
                    <div class="col-sm-4">
                        <div class="service_wrap heading_space">
                            <div class="image bottom10">
                                <img src="{{ asset($images[$i]) }}" alt="our Team">
                                <div class="overlay">
                                    <a href="{{ route('service-details', $ids[$i]) }}" class="overlay_center border_radius">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                            <h3 class="bottom10">{{ $titles[$i] }}</h3>
                            <p class="bottom15">
                                {{ $descriptions[$i] }}
                            </p>
                            <a href="{{ route('service-details', $ids[$i]) }}" class="btn-border border_radius text-uppercase">
                                Learn More
                            </a>
                        </div>
                    </div>
                @endfor

            </div>
        </div>
    </section>
    <!-- SERVICES ends -->

@endsection

@section('page_scripts')
@endsection
