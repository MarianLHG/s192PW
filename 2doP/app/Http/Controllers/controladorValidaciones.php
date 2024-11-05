<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorUsuario;
use Illuminate\Http\Request;

class controladorValidaciones extends Controller
{
    public function validarUsuario(validadorUsuario $peticionValidada){
        
        $usuario=$peticionValidada->input("txtcorreo");
        session()->flash('exito', 'usuario guardado'.$usuario);
        return to_route('rutaformulario');



    }
}
