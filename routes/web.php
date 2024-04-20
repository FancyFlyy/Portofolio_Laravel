<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/portofolio', function () {
    return view('portofolio');
});
Route::get('/portofolio2', function () {
    return view('portofolio2');
});