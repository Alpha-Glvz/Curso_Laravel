<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Contacto', function () {
    return "Aqui podras contactar";
});
