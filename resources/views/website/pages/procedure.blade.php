@extends('website.layout')

@section('page_title')
    Procedure
@endsection

@section('page_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/procedure.css') }}">
@endsection

@section('page_scripts')
    <script type="text/javascript" src="{{ asset('js/procedure.js') }}"></script>
@endsection

<?php
$banner_path = 'images/doctor-referral/banner-mobile.png';
?>

@section('page_content')
    <div id="page" class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-3 l-overview">
                <img src="{{ asset('images/procedure/overview.png') }}" alt="Procedure Overview">
            </div>
            <div class="col-md-9 col-sm-9 r-overview">
                <h1 class="website-title left-title underlined-title">Nero Procedure</h1>
                <h2 class="website-title sub-title left-title">Overview</h2>
                <p>
                    Nero Procedure Nero Procedure Nero Procedure Nero Procedure Nero
                    Nero Procedure Nero Procedure Nero Procedure Nero Procedure Nero
                    Nero Procedure Nero Procedure Nero Procedure Nero Procedure Nero
                </p>
            </div>
            <div class="col-md-12 p-0">
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
@endsection