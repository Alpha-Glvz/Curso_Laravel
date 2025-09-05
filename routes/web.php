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


Route::get('/contact2', function () {
    $age = 33;
    $data = ['name' => 'Luis', 'age' => $age];
    return view('contact2',$data);
})->name('contact2');