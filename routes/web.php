<?php

use App\Http\Controllers\PrimerControlador;
use Illuminate\Support\Facades\Route;

Route::get('/test',[PrimerControlador::class,'index']);