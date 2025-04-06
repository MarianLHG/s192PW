<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class FiguraController extends Controller
{
   
    public function create()
    {
        return view('figurasRegistro');
    }
    
public function store(Request $request)
{
    $request->validate([
        'titulo' => 'required|string|max:255',
        'precio' => 'required|numeric',
        'cantidad' => 'required|integer|min:1',
        'descripcion' => 'nullable|string',
        'tamano' => 'nullable|string',
        'material' => 'nullable|string',
        'peso' => 'nullable|string',
        'modelo' => 'nullable|string',
        'imagen' => 'nullable|image|max:2048',
    ]);

    $imagenPath = null;
    if ($request->hasFile('imagen')) {
        $imagenPath = $request->file('imagen')->store('productos', 'public');
    }

    Producto::create([
        'nombre' => $request->titulo,
        'precio' => $request->precio,
        'imagen' => $imagenPath,
        'stock' => $request->cantidad,
        'tipo' => 'figura',
        'descripcion' => $request->descripcion,
        'tamano' => $request->tamano,
        'material' => $request->material,
        'peso' => $request->peso,
        'modelo' => $request->modelo,
    ]);
    

    return redirect()->route('todosProductos')->with('success', 'Figura registrada correctamente.');

    }
}
