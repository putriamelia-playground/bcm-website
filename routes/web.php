<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('home', ['title' => 'Home Page']);
});

Route::get('/artikel', function () {
    return view('about', ['title' => 'Artikel Page']);
});

Route::get('/agenda', function () {
    return view('agenda', ['title' => 'Agenda Page']);
});

Route::get('/about-us', function () {
    return view('aboutus', ['title' => 'About Us Page']);
});

Route::get('/layanan', function () {
    return view('layanan', ['title' => 'Layanan Page']);
});
