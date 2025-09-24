<?php

use App\Http\Controllers\PrimerControlador;
use Illuminate\Support\Facades\Route;

Route::get('/',[PrimerControlador::class,'index']);
Route::get('/otro/{post}',[PrimerControlador::class,'otro']);