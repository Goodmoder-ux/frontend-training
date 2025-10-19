<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function () {
    return view('ninjas.index');
});
Route::get('/info', function () {
    return view('ninjas.info');
});