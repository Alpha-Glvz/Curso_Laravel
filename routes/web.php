<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/test', function () {
    //return redirect()->route('portafolio');
    return to_route('portafolio');
});

Route::get('/crud', function () {
    $age = 33;
    $data = ['name' => 'Angel', 'age' => $age];
    return view('crud/index',$data);
})->name('crud');

Route::get('/acerca', function () {
    return view('acerca');
})->name('acerca');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/portafolio', function () {
    return view('portafolio');
})->name('portafolio');