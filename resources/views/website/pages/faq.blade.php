@extends('website.layout')

@section('page_title')
    FAQ
@endsection

@section('page_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/faq.css') }}">
@endsection

@section('page_scripts')
    <script type="text/javascript" src="{{ asset('js/faq.js') }}"></script>
@endsection

<?php
$banner_path = 'images/doctor-referral/banner-mobile.png';
?>

@section('page_content')
    <!--  FAQ SECTION  -->
    <div id="page" class="container-fluid">
        <div class="row">
            <div id="faqs" class="col-12">
                <h1 class="website-title">faq</h1>
                <div class="card">
                    <a href="#collapse-1" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-1">
                        <div class="card-header" id="head-1">
                            <i id="ico-1" class="down"></i>
                            craft beer labore wes anderson cred nesciunt sapiente sapiente ea?
                        </div>
                    </a>
                    <div id="collapse-1" class="collapse show" aria-labelledby="head-1" data-parent="#faqs">
                        <div class="card-body">
                            craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                            butcher vice lome wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                            butcher vice lome wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                            butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                            nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card">
                    <a href="#collapse-2" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-2">
                        <div class="card-header" id="head-2">
                            <i id="ico-2" class="up"></i>
                            craft beer labore wes cred nesciunt sapiente sapiente ea?
                        </div>
                    </a>
                    <div id="collapse-2" class="collapse" aria-labelledby="head-2" data-parent="#faqs">
                        <div class="card-body">
                            craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                            butcher vice lome wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                            butcher vice lome wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                            butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                            nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card">
                    <a href="#collapse-3" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-3">
                        <div class="card-header" id="head-3">
                            <i id="ico-3" class="up"></i>
                            craft beer labore wes anderson cred nesciunt sapie sapiente ea?
                        </div>
                    </a>
                    <div id="collapse-3" class="collapse" aria-labelledby="head-3" data-parent="#faqs">
                        <div class="card-body">
                            craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                            butcher vice lome wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                            butcher vice lome wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                            butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                            nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card">
                    <a href="#collapse-4" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-4">
                        <div class="card-header" id="head-4">
                            <i id="ico-4" class="up"></i>
                            craft beer labore wes anderson cred nesciunt sapiente sapiente ea?
                        </div>
                    </a>
                    <div id="collapse-4" class="collapse" aria-labelledby="head-4" data-parent="#faqs">
                        <div class="card-body">
                            craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                            butcher vice lome wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                            butcher vice lome wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                            butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                            nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  End FAQ SECTION  -->
@endsection