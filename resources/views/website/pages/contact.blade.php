@extends('website.layout')

@section('page_title')
    Contact Us
@endsection

@section('page_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
@endsection

@section('page_scripts')
    <script type="text/javascript" src="{{ asset('js/contact.js') }}"></script>
@endsection

<?php
$banner_path = 'images/doctor-referral/banner-mobile.png';
?>

@section('page_content')
    <!--  Contact Form SECTION  -->
    <div id="page" class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="website-title">contact us</h1>
                <p>
                    craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                    butcher vice lome wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                    butcher vice lome wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                </p>
                <h1 class="website-title sub-title">How Can We Help You?</h1>
                <form>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Phone number">
                        </div>
                        <div class="col">
                            <input type="email" class="form-control" placeholder="E-mail address">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <textarea class="form-control" id="" rows="3"></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--  End Contact Form SECTION  -->

    <!--  Map SECTION  -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12 bg-dark">
                <h1 class="website-title">Map</h1>
            </div>
            <div class="col-lg-6 col-md-12">
                <h1 class="website-title">Map</h1>
            </div>
        </div>
    </div>
    <!--  End Map SECTION  -->

    <!--  Board SECTION  -->
    <div id="page" class="container-fluid bg-light">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img class="rounded-circle p-4" src="https://via.placeholder.com/200" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img class="rounded-circle p-4" src="https://via.placeholder.com/200" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img class="rounded-circle p-4" src="https://via.placeholder.com/200" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img class="rounded-circle p-4" src="https://via.placeholder.com/200" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img class="rounded-circle p-4" src="https://via.placeholder.com/200" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img class="rounded-circle p-4" src="https://via.placeholder.com/200" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  End Board SECTION  -->

@endsection