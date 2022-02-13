<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('website.pages.soon');
})->name('home');

Route::get('/doctor-referral', function () {
    return view('website.pages.doctor_referral');
})->name('doctor_referral');

Route::post('/referral-form', 'DoctorReferralController@store');

Route::get('/faq', function () {
    return view('website.pages.faq');
})->name('faq');

Route::get('/feedback', function () {
    return view('website.pages.feedback');
})->name('feedback');

Route::get('/profile', function () {
    return view('website.pages.profile');
})->name('profile');

Route::get('/procedure', function () {
    return view('website.pages.procedure');
})->name('procedure');

Route::get('/about', function () {
    return view('website.pages.about');
})->name('about');
