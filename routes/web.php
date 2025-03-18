<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


// Admin Route //
Route::get('/admin', function () {
    return view('backend.layout');
});
Route::get('/home', function () {
    return view('backend.home');
});
