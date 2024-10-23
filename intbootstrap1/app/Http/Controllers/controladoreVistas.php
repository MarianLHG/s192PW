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

        //respuestas de redireccion 

        //redireccion usando la ruta
        //return redirect('/');

        //redireccion usando en nombre de la ruta
        //return redirect()->route('rutaclientes');

        //redireccion al origen
        //return back();

        //redireccion con valores en session
        $usuario=$peticion->input('txtnombre'); 

        session()->flash('exito','se guardo el usuario '.$usuario);
        return to_route('rutaformulario');

    }

}
