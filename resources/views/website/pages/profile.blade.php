@extends('website.layout')

@section('page_title')
    Doctor Profile
@endsection

@section('page_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">
@endsection

@section('page_scripts')
    <script type="text/javascript" src="{{ asset('js/profile.js') }}"></script>
@endsection

<?php
$banner_path = 'images/doctor-referral/banner-mobile.png';
?>

@section('page_content')

    <!--  FAQ SECTION  -->
    <div id="page" class="container-fluid">
        <div class="row">
            <h1 class="website-title left-title">Doctor Profile</h1>
            <div class="col-lg-6 col-md-12 col-sm-12 pl-0 pr-4">
                <img class="p-img" src="{{ asset('images/profile/profile.png') }}" alt="Profile Image">
                <a href="#" class="">BOOK NOW</a>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 pl-4 pr-0">
                <p class="p-title">Name:</p>
                <p class="p-info">Amir Hamdy</p>
                <p class="p-title">Speciality:</p>
                <p class="p-info">Intervention</p>
                <p class="p-title">Areas Of Expertise:</p>
                <p class="p-info">Spin jhjs nmslcnld akcnkasjnckajs Spin jhjs nmslcnld akcnkasjnckajs </p>
                <p class="p-title">Education:</p>
                <p class="p-info">University of Helwan</p>
                <p class="p-title">Education:</p>
                <ul class="p-info">
                    <li>University of Helwan</li>
                    <li>University of Helwan</li>
                    <li>University of Helwan</li>
                </ul>
                <p class="p-title">Education:</p>
                <ul class="p-info">
                    <li>University of Helwan</li>
                    <li>University of Helwan</li>
                    <li>University of Helwan</li>
                </ul>
                <p class="p-title">Education:</p>
                <ul class="p-info">
                    <li>University of Helwan</li>
                    <li>University of Helwan</li>
                    <li>University of Helwan</li>
                </ul>
            </div>
        </div>
    </div>
    <!--  End FAQ SECTION  -->
@endsection