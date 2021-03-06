@extends('website.layout')

@section('page_title')
    Careers
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
                    <p>Join Us Now!</p>
                    <h1 class="text-uppercase">Careers</h1>
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
                        <li class="active">Careers</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('page_scripts')
@endsection
