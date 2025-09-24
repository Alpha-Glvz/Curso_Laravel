<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    function index(){
        $posts = ['post1','post2'];
        //return view('welcome',['posts'=>$posts]);
        return view('welcome',compact('posts'));
    }

    function otro($post){
        echo $post;
    }

}
