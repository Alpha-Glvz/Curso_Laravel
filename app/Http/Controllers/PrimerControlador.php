<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    function index(){
        $age = 33;
        $data = ['name' => 'Angel', 'age' => $age];
        
        return view('welcome',$data);
    }
}
