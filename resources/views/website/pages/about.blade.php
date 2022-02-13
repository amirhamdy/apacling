@extends('website.layout')

@section('page_title')
    About
@endsection

@section('page_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}">
@endsection

@section('page_scripts')
    <script type="text/javascript" src="{{ asset('js/about.js') }}"></script>
@endsection

<?php
$banner_path = 'images/about/banner-mobile.png';
?>

@section('page_content')
    <!--  Introduction SECTION  -->
    <div id="page" class="container-fluid">
        <div class="row">
            <div class="col-12 mb-3">
                <h1 class="website-title">About Shefaa</h1>
                <h1 class="website-title sub-title">
                    Embolization is a minimally invasive surgical technique. The purpose is to prevent blood flow to an
                    area of the body, which can effectively shrink a tumor or block an aneurysm
                </h1>
                <p>
                    Embolization is a minimally invasive surgical technique. Embolization is a minimally invasive
                    surgical technique. The purpose is to prevent blood flow to an area of the body, which can
                    effectively shrink a tumor or block an aneurysm. Embolization is a minimally invasive surgical
                    technique. . Embolization is a minimally invasive surgical technique. Embolization is a minimally
                    invasive surgical technique. The purpose is to prevent blood flow to an area of the body, which can
                    effectively shrink a tumor or block an aneurysm. Embolization is a minimally invasive surgical
                    technique.
                </p>
            </div>

            <div id="mission" class="col-xl-6 col-lg-10  col-md-10  col-sm-10 mx-auto">
                <img src="{{ asset('images/about/mission.png') }}" alt="mission image">
                <div class="overlay-text">
                    <div>
                        <h2 class="website-title white-title">Mission</h2>
                        <p>
                            Embolization is a minimally invasive surgical technique. The purpose is to prevent blood
                            flow to
                            an area of the body, which can effectively shrink a tumor or block an aneurysm
                        </p>
                    </div>
                </div>
            </div>

            <div id="vision" class="col-xl-6 col-lg-10  col-md-10  col-sm-10 mx-auto">
                <img src="{{ asset('images/about/vision.png') }}" alt="vision image">
                <div class="overlay-text">
                    <div>
                        <h2 class="website-title white-title">Vision</h2>
                        <p>
                            Embolization is a minimally invasive surgical technique. The purpose is to prevent blood
                            flow to
                            an area of the body, which can effectively shrink a tumor or block an aneurysm
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  End Introduction SECTION  -->

    <!--  Board SECTION  -->
    <div id="page" class="container-fluid board">
        <div class="row">
            <div class="col-12">
                <h1 class="website-title">The Board</h1>
                <div class="owl-carousel owl-theme owl-board">
                    <div class="item">
                        <img src="{{ asset('images/about/doctor-1.png') }}">
                        <h1 class="website-title doctor-name">Dr. Ibrahim Ali</h1>
                        <p>
                            Neurosurgery<br>
                            Clinical Research<br>
                            Director
                        </p>
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/about/doctor-2.png') }}">
                        <h1 class="website-title doctor-name">Dr. Ibrahim Ali</h1>
                        <p>
                            Neurosurgery<br>
                            Clinical Research<br>
                            Director
                        </p>
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/about/doctor-3.png') }}">
                        <h1 class="website-title doctor-name">Dr. Ibrahim Ali</h1>
                        <p>
                            Neurosurgery<br>
                            Clinical Research<br>
                            Director
                        </p>
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/about/doctor-1.png') }}">
                        <h1 class="website-title doctor-name">Dr. Ibrahim Ali</h1>
                        <p>
                            Neurosurgery<br>
                            Clinical Research<br>
                            Director
                        </p>
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/about/doctor-2.png') }}">
                        <h1 class="website-title doctor-name">Dr. Ibrahim Ali</h1>
                        <p>
                            Neurosurgery<br>
                            Clinical Research<br>
                            Director
                        </p>
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/about/doctor-3.png') }}">
                        <h1 class="website-title doctor-name">Dr. Ibrahim Ali</h1>
                        <p>
                            Neurosurgery<br>
                            Clinical Research<br>
                            Director
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  End Board SECTION  -->
@endsection