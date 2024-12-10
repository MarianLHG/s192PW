<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorUsuario;
use Illuminate\Http\Request;

class controladorValidaciones extends Controller
{
    public function form(){
        return view('formUsuarios');
    }
    public function validarUsuario(validadorUsuario $peticionValidada){
        
        $usuario=$peticionValidada->input("txtcorreo");
        session()->flash('exito', 'Se guardo el usuario: '.$usuario);
        return to_route('rutaform');



    }
}
