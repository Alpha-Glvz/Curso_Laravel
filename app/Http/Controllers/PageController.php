<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    
    public function services()
    {
        // Puedes pasar datos a la vista si es necesario
        $services = [
            // ... datos de servicios
        ];
        
        return view('pages.services', compact('services'));
    }
    
    public function portfolio()
    {
        $projects = [
            // ... datos de proyectos
        ];
        
        return view('pages.portfolio', compact('projects'));
    }
    
    public function about()
    {
        $team = [
            // ... datos del equipo
        ];
        
        return view('pages.about', compact('team'));
    }
    
    public function contact()
    {
        return view('pages.contact');
    }
}