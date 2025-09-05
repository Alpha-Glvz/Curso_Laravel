<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    $age = 33;
    $data = ['name' => 'Angel', 'age' => $age];
    return view('contact',$data);
})->name('contact');