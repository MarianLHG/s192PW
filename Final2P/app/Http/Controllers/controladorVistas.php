<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorFormulario;
use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('principal');
    }

    public function form(){
        return view('formularioContactos');
    }

    public function lista(){
        return view('ListadoContactos');
    }

    public function pContacto(validadorFormulario $peticionValidada){
        
        $usuario=$peticionValidada->input("correo");
        session()->flash('exito', 'Se agrego el contacto: '.$usuario);
        return to_route('rutaform');
    }
}
