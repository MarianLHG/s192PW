<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladoreVistas extends Controller
{
    public function home(){
        return view('inicio');
    }
    public function formulario(){
        return view('formulario');
    }
    public function consulta(){
        return view('clientes');
    }
}
