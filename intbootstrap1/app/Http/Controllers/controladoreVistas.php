<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorClientes;
use Illuminate\Http\Request;

class controladoreVistas extends Controller
{
    public function home(){
        return view('inicio');
    }
    
    public function consulta(){
        return view('clientes');
    }
    public function procesarCliente(validadorClientes $peticionValidada){

        //redireccion con valores en session
        $usuario=$peticionValidada->input('txtnombre'); 

        session()->flash('exito','se guardo el usuario '.$usuario);
        return to_route('rutaformulario');

    }

}
