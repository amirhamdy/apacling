@extends('website.layout')

@section('page_title')
    Doctor Referral
@endsection

@section('page_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/doctor-referral.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form-validation.css') }}">
@endsection

@section('page_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.18.0/jquery.validate.js"
            type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.18.0/additional-methods.js"
            type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('js/doctor-referral.js') }}"></script>
@endsection

<?php
$banner_path = 'images/doctor-referral/banner-mobile.png';
?>

@section('page_content')
    <!--  Doctor Referral SECTION  -->
    <div id="page" class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="website-title">Doctor Referral</h1>
                <h1 class="website-title sub-title">How it works</h1>
                <p>
                    Embolization is a minimally invasive surgical technique. Embolization is a minimally invasive
                    surgical technique. The purpose is to prevent blood flow to an area of the body, which can
                    effectively shrink a tumor or block an aneurysm.
                </p>
                <div class="owl-carousel owl-theme owl-doctor">
                    <div class="item divider">
                        <img src="{{ asset('images/doctor-referral/01.png') }}">
                        <p>
                            Embolization is a minimally invasive surgical technique. Embolization is a minimally
                            invasive surgical technique. The purpose is to prevent blood flow to an area of the body,
                            which can effectively shrink a tumor or block an aneurysm.
                        </p>
                    </div>
                    <div class="item divider">
                        <img src="{{ asset('images/doctor-referral/02.png') }}">
                        <p>
                            Embolization is a minimally invasive surgical technique. Embolization is a minimally
                            invasive surgical technique. The purpose is to prevent blood flow to an area of the body,
                            which can effectively shrink a tumor or block an aneurysm.
                        </p>
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/doctor-referral/03.png') }}">
                        <p>
                            Embolization is a minimally invasive surgical technique. Embolization is a minimally
                            invasive surgical technique. The purpose is to prevent blood flow to an area of the body,
                            which can effectively shrink a tumor or block an aneurysm.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  End Doctor Referral SECTION  -->

    <!--  Form Referral SECTION  -->
    <div class="form-section">
        {{--        @include('website.partials.errors')--}}
        <form id="referralForm" method="post" action="{{ url('referral-form') }}" enctype="multipart/form-data"
              data-parsley-validate="">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row p-0 mb-0">
                <div class="col-md-12 p-md-0 mb-md-0 ">
                    <h1 class="website-title text-white">Referral Form</h1>
                    <p class="p-md-2 p-sm-0 text-white">
                        Embolization is a minimally invasive surgical technique. Embolization is a minimally invasive
                        surgical technique. The purpose is to prevent blood flow to an area of the body, which can
                        effectively shrink a tumor or block an aneurysm.
                    </p>
                </div>
                <div class="col-xl-6 col-sm-12 left-form">
                    <h1 class="website-title sub-title left-title text-white p-0">Doctor Information</h1>
                    <div class="form-group">
                        <input type="text" class="form-control" name="doctor_name" property="doctor_name"
                               placeholder="Doctor's Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="doctor_specialty" property="doctor_specialty"
                               placeholder="Doctor’s Specialty">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="doctor_office" property="doctor_office"
                               placeholder="Doctor’s Office">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="doctor_email" property="doctor_email"
                               placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="doctor_mobile" property="doctor_mobile"
                               placeholder="Mobile">
                    </div>
                </div>
                <div class="col-xl-6 col-sm-12 right-form">
                    <h1 class="website-title sub-title left-title text-white p-0">Patient Information</h1>
                    <div class="form-group">
                        <input type="text" class="form-control" name="patient_name" placeholder="Patient's Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="patient_email" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="patient_mobile" placeholder="Mobile">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="patient_docs" name="patient_docs">
                        <label class="custom-file-label" id="patient_docs_label" for="patient_docs">Attach Patient History</label>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="procedure"
                               placeholder="Refer to/Procedure undergoing">
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12">
                    <p class="response" id="response"></p>
                    <button type="submit" id="referralFormSubmit" class="submit-btn">Submit Referral</button>
                </div>
            </div>
        </form>
    </div>
    <!--  End Form Referral SECTION  -->
@endsection