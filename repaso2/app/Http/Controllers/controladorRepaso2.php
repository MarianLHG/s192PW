<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorLibros;
use Illuminate\Http\Request;

class controladorRepaso2 extends Controller
{
    public function home(){
        return view('inicio');
    }
    public function registro(){
        return view('registrolibro');
    }
    public function guardarLibro(validadorLibros $peticion){
        $libro=request()->input('txtlibro');

        session()->flash('exito', 'Todo correcto: libro ' .$libro . ' guardado');
        return to_route('rutaregistro');
    }
}    
