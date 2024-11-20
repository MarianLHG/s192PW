<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorClientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class clienteController extends Controller
{
    /**
     * Nos sirve para la consulta del crud
     */
    public function index()
    {
        $consultaClientes= DB::table('clientes')->get();
        return view('clientes',compact('consultaClientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorClientes $request)
    {
        DB::table('clientes')->insert([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);

        $usuario=$request->input('txtnombre');
        session()->flash('exito','se guardo el usuario '.$usuario);
        return to_route('rutaformulario');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente=DB::table('clientes')->where('id',$id)->first();
        return view('editarCliente',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorClientes $request, string $id)
    {
        DB::table('clientes')->where('id', operator: $id)->update([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono')
        ]);
        session()->flash('exito','Cambios guardados');
        return to_route('rutaclientes');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('clientes')->where('id', operator: $id)->delete();
        session()->flash('exito','Usuario eliminado');
        return to_route('rutaclientes');

    }
}
