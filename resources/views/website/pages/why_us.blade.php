@extends('website.layout')

@section('page_title')
    Why Us
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
                    <h1 class="text-uppercase">Why Us</h1>
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
                        <li class="active">Why Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--BLOG DETAILS-->
    <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 bottom40">
                    <div class="blog_item">
                        <div class="blog_image bottom20">
                            <img class="img-responsive" style="margin: 0 auto;"
                                 src="{{ asset('images/why-us/1.jpeg') }}" alt="">
                        </div>
                        <hr/>
                        <h3>Why Choose Us:</h3>

                        <br>

                        <p class="bottom30">
                            Apacling is amongst the leading translation and localisation companies in Asia. Based in the
                            Malaysia, we have offices in a number of different locations which enables us to remain in
                            touch with all local demands, needs and requirements. In turn, this knowledge translates to
                            the highest quality of localisation available. Our unique position also provides us with the
                            opportunity to offer our clients a comprehensive list of services to bring a competitive
                            edge to their products – and prepare them for any local, regional or international markets.
                        </p>
                        <p class="bottom30">
                            Each Apacling branch has an extensive portfolio of services and products which can be
                            customised to suit individual budgets, business plans or deadlines. Additionally, our team
                            will devise a solution that is uniquely suited to your project requirements.
                        </p>
                        <blockquote class="bottom30">
                            Since Apacling was established in 2018, we have successfully collaborated with clients from
                            a range of industries. The emphasis we place on results and outstanding customer service
                            enables us to deliver a consistently high and reliable level of service to all of our
                            regional and international partners.
                        </blockquote>
                        <p class="bottom30">
                            Below are just some of the industries Apacling teams are experienced in:
                        </p>

                        <ul class="check bottom30 col-sm-6">
                            <li><i class="icon-check"></i> Automotive</li>
                            <li><i class="icon-check"></i> Business support services</li>
                            <li><i class="icon-check"></i> Education</li>
                            <li><i class="icon-check"></i> Electronics</li>
                            <li><i class="icon-check"></i> Energy</li>
                            <li><i class="icon-check"></i> Financial services</li>
                            <li><i class="icon-check"></i> Literature</li>
                        </ul>
                        <ul class="check bottom30 col-sm-6">
                            <li><i class="icon-check"></i> Machinery and equipment</li>
                            <li><i class="icon-check"></i> Media</li>
                            <li><i class="icon-check"></i> Medical</li>
                            <li><i class="icon-check"></i> Oil and gas</li>
                            <li><i class="icon-check"></i> Pharmaceutical</li>
                            <li><i class="icon-check"></i> Technical manuals</li>
                            <li><i class="icon-check"></i> Tourism</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BLOG DETAILS ends-->

@endsection

@section('page_scripts')
@endsection
