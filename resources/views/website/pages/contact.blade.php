@extends('website.layout')

@section('page_title')
    Contact Us
@endsection

@section('page_styles')
@endsection

@section('page_scripts')
    <script type="text/javascript"
            src="http://maps.google.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U"></script>
@endsection

<?php
$banner_path = 0;
?>

@section('page_content')
    <section class="page_header">
        <div class="container">
            <div class="row" style="margin-top: 80px">
                <div class="col-sm-12 text-center">
                    <p>Talk To Us!</p>
                    <h1 class="text-uppercase">Contact Us</h1>
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
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTACT -->
    <section class="padding-bottom-half padding-top contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contact_detail padding-bottom">
                        <h3 class="bottom20">About <span class="green_t"> Apacling</span></h3>
                        <p class="bottom30">
                            Quality Comes First: 15 Years of experience in providing translation services to global
                            partners and trusted by most of top 100 global language providers. Trusted by most of top
                            100 global language providers.
                            In-house & in-country specialists with more than 7 years of translation experience.
                        </p>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="address">
                                    <span><i class="icon-phone4"></i></span>
                                    <div class="text">
                                        <h4>Phone</h4>
                                        <p>+60 03-2299 4400</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="address">
                                    <span><i class="icon-mail"></i></span>
                                    <div class="text">
                                        <h4>Email Address</h4>
                                        <p><a href="{{ route('home') }}">info@apacling.com</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="address">
                                    <span><i class="icon-location"></i></span>
                                    <div class="text">
                                        <h4>Address</h4>
                                        <p>8th floor, 379 Hudson St New York, NY 10018</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h3 class="bottom20">Contact Us</h3>
                    <form class="callus padding-bottom" id="contact-form" onSubmit="return false">

                        <div class="form-group">
                            <div id="result"></div>
                        </div>


                        <div class="form-group">
                            <label>Your Name *</label>
                            <div class="input-group">
                                <input type="text" class="form-control" required name="name" id="name">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email Addres *</label>
                            <div class="input-group">
                                <input type="email" class="form-control" required name="email" id="email">
                                <span class="input-group-addon"><i class="icon-envelope2"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <div class="input-group">
                                <textarea class="form-control" name="message" id="message"></textarea>
                                <span class="input-group-addon"><i class=" icon-comments"></i></span>
                            </div>
                        </div>
                        <button type="submit" class="btn-green border_radius" id="btn_submit" name="btn_submit">Submit
                        </button>
                    </form>
                </div>
                <div class="col-sm-12">

                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT ends -->
@endsection
