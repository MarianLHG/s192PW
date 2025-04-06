<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'precio' => 'required|numeric',
        'stock' => 'required|integer|min:1|max:100', //control de stock
        'imagen' => 'nullable|image|max:2048',
        'tipo' => 'required|in:comic,figura',
    ]);

    // Guardar imagen si se sube
    $rutaImagen = null;
    if ($request->hasFile('imagen')) {
        $rutaImagen = $request->file('imagen')->store('productos', 'public');
    }

    // Crear producto
    Producto::create([
        'nombre' => $request->nombre,
        'precio' => $request->precio,
        'stock' => $request->stock,
        'tipo' => $request->tipo,
        'imagen' => $rutaImagen,
    ]);

    return redirect()->route('todosProductos')->with('success', 'Producto guardado correctamente.');
}
    
    public function edit($id)
{
    $producto = Producto::findOrFail($id);
    return view('editarProducto', compact('producto'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'precio' => 'required|numeric',
        'stock' => 'required|integer|min:1|max:100', // 👈 aquí controlamos stock
        'imagen' => 'nullable|image|max:2048',
        'tipo' => 'required|in:comic,figura',
    ]);

    $producto = Producto::findOrFail($id);

    // Subir nueva imagen si se cambió
    if ($request->hasFile('imagen')) {
        $rutaImagen = $request->file('imagen')->store('productos', 'public');
        $producto->imagen = $rutaImagen;
    }

    $producto->nombre = $request->nombre;
    $producto->precio = $request->precio;
    $producto->stock = $request->stock;
    $producto->tipo = $request->tipo;
    $producto->descripcion = $request->descripcion;
    $producto->tamano = $request->tamano;
    $producto->material = $request->material;
    $producto->peso = $request->peso;
    $producto->modelo = $request->modelo;
    $producto->sku = $request->sku;
    $producto->anio_publicacion = $request->anio_publicacion;
    $producto->mes = $request->mes;
    $producto->paginas = $request->paginas;
    $producto->coleccion = $request->coleccion;

    $producto->save();

    return redirect()->route('todosProductos')->with('success', 'Producto actualizado correctamente.');
}


    public function index()
    {
        $productos = Producto::orderBy('created_at', 'desc')->paginate(6);
        return view('todosProductos', compact('productos'));
    }

    public function destroy($id)
    {
        Producto::destroy($id);
        return redirect()->route('todosProductos')->with('success', 'Producto eliminado correctamente.');
    }


    protected $fillable = [
        'nombre', 'precio', 'imagen', 'stock', 'tipo',
        'descripcion', 'tamano', 'material', 'peso', 'modelo',
        'sku', 'anio_publicacion', 'mes', 'paginas', 'coleccion'
    ];

    
}
