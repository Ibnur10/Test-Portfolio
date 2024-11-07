<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/skill' , function () {
    return view('skill');
});

Route::get('/contact', function () {
    return view('contact');
});
