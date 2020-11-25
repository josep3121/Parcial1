<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catalogos extends Controller
{
    public function perros(){
        return view('CatalogoPerros');
    }
    public function gatos(){
        return view('CatalogoGatos');
    }
}
