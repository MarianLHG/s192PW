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
    public function procesarCliente(Request $peticion){

        //return 'La información del cliente llego al controlador';

        //devuelve todo lo que contiene la peticion
        //return $peticion->all();

        //la ruta donde se hizo la peticion
        //return $peticion->path();

        //devuelve la url completa
        //return $peticion->url();

        return $peticion->ip();
    }

}
