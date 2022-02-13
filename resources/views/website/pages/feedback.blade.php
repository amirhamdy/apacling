@extends('website.layout')

@section('page_title')
    Feedback
@endsection

@section('page_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/feedback.css') }}">
@endsection

@section('page_scripts')
    <script type="text/javascript" src="{{ asset('js/feedback.js') }}"></script>
@endsection

<?php
$banner_path = 'images/doctor-referral/banner-mobile.png';
?>

@section('page_content')
    <!--  FEEDBACK SECTION  -->
    <div id="page" class="container-fluid">
        <div class="row">
            <div id="faqs" class="col-12">
                <h1 class="website-title">feedback</h1>
                <p>
                    craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                    butcher vice lome wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                </p>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <form id="referralForm" method="post" action="{{ url('referral-form') }}"
                              enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" class="form-control" id="doctor_name" placeholder="Doctor's Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="doctor_specialty"
                                       placeholder="Doctor’s Specialty">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="doctor_office"
                                       placeholder="Doctor’s Office">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="doctor_email" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="doctor_mobile" placeholder="Mobile">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  End FEEDBACK SECTION  -->
@endsection