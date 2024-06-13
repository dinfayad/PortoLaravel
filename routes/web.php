<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/Progres', function () {
    return view('Progres');
});

Route::get('/Contact', function () {
    return view('Contact');
});
