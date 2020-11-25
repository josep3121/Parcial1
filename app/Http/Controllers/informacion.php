<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class informacion extends Controller
{
    public function ver(){
        return view('presentacion');
    }
    public function info(){
        return view('Contactos');
    }
}
