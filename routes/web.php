<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/crud', function () {
    $age = 33;
    $data = ['name' => 'Angel', 'age' => $age];
    return view('crud/index',$data);
})->name('crud');