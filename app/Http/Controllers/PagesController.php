<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PagesController extends Controller
{
    //
    public function home() {
        return view('home');
    }

    public function portfolio() {
        return view('portfolio');
    }

    public function proyectos() {
        return view('proyectos');
    }

    public function blog() {
        return view('blog');
    }

    public function contacto() {
        return view('contacto');
    }

    public function contact() {
        return view('tickets.create');
    }

    
}
