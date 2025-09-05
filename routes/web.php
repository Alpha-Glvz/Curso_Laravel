<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/servicios', [PageController::class, 'services'])->name('services');
Route::get('/portafolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/acerca-de', [PageController::class, 'about'])->name('about');
Route::get('/contacto', [PageController::class, 'contact'])->name('contact');