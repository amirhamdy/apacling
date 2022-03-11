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
    return view('website.pages.index');
})->name('home');

Route::get('/about', function () {
    return view('website.pages.about');
})->name('about');

Route::get('/services', function () {
    return view('website.pages.services');
})->name('services');

Route::get('/translation', function () {
    return view('website.pages.index');
})->name('translation');

Route::get('/why-us', function () {
    return view('website.pages.why_us');
})->name('why_us');

Route::get('/careers', function () {
    return view('website.pages.careers');
})->name('careers');

Route::get('/contact-us', function () {
    return view('website.pages.contact');
})->name('contact-us');
