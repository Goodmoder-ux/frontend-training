<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function () {
    $ninjas = [
        ["name" => "mario", "skill" => 75, "id" => '1'],
        ["name" => "luigi", "skill" => 45, "id" => "2"],
        ["name" => "abdi", "skill" => 100, "id" => "3"],
        ["name" => "xeno", "skill" => 30, "id" => "4"],
    ];
    return view('ninjas.index', ["greeting" => "hello", "ninjas" => $ninjas]);
});

Route::get('/ninjas/create', function () {
    return view('ninjas.create');
});

Route::get('/ninjas/{id}', function ($id) {
    return view('ninjas.show', ["id" => $id]);
});
