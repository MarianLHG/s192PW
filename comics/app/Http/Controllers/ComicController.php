<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ComicController extends Controller
{
    public function create()
    {
        return view('comicsRegistro');
    }
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'cantidad' => 'required|integer|min:1',
            'imagen' => 'nullable|image|max:2048',
            'sku' => 'nullable|string|max:100',
            'anio_publicacion' => 'nullable|string|max:10',
            'mes' => 'nullable|string|max:20',
            'paginas' => 'nullable|string|max:10',
            'coleccion' => 'nullable|string|max:255',
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
            'tipo' => 'comic',
            'sku' => $request->sku,
            'anio_publicacion' => $request->anio_publicacion,
            'mes' => $request->mes,
            'paginas' => $request->paginas,
            'coleccion' => $request->coleccion,
        ]);

        return redirect()->route('todosProductos')->with('success', '¡Cómic registrado exitosamente!');
    }
}
