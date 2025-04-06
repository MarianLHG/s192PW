<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FiguraController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\ContactoController; 
use App\Http\Controllers\ProveedorController;




Route::get('/RegistroProductos', function () {
    return view('productosRegistro');
})->name('productosRegistro');

Route::get('/Productos', function () {
    return view('todosProductos');
})->name('todosProductos');

Route::get('/agregarComic', function () {
    return view('comicsRegistro');
})->name('comicsRegistro');

Route::get('/agregarFigura', function () {
    return view('figurasRegistro');
})->name('figurasRegistro');

Route::get('/Admin', function () {
    return view('perfilAdmin');
})->name('perfilAdmin');

#rutas controller

Route::post('/figuras', [FiguraController::class, 'store'])->name('figuras.store');
Route::get('/figuras/crear', [FiguraController::class, 'create'])->name('figuras.create');

Route::get('/productos', [ProductoController::class, 'index'])->name('todosProductos');

Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');
Route::get('/comics/crear', action: [ComicController::class, 'create'])->name('comics.create');

Route::delete('/productos/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');

Route::get('/productos/{id}/editar', [ProductoController::class, 'edit'])->name('productos.edit');
Route::put('/productos/{id}', [ProductoController::class, 'update'])->name('productos.update');

Route::get('/perfilAdmin', [AdminProfileController::class, 'edit'])->name('perfilAdmin');
Route::put('/perfilAdmin/{id}', [AdminProfileController::class, 'update'])->name('adminPerfil.update');
Route::get('/perfilAdmin/crear', action: [AdminProfileController::class, 'create'])->name('perfilAdmin.create');

// Muestra el formulario (GET)
Route::get('/contacto', [ContactoController::class, 'formulario'])->name('contacto.formulario');

// Procesa el formulario (POST)
Route::post('/contacto', [ContactoController::class, 'enviar'])->name('contacto.enviar');


Route::get('/proveedores', [ProveedorController::class, 'index'])->name('proveedores.index');
Route::get('/proveedores/crear', [ProveedorController::class, 'create'])->name('proveedores.create');
Route::post('/proveedores', [ProveedorController::class, 'store'])->name('proveedores.store');

Route::get('/proveedores/{id}/editar', [ProveedorController::class, 'edit'])->name('proveedores.editar');
Route::put('/proveedores/{id}', [ProveedorController::class, 'update'])->name('proveedores.update');
Route::delete('/proveedores/{id}', [ProveedorController::class, 'destroy'])->name('proveedores.destroy');

Route::get('/tienda', function () {
    return view('tiendaCliente');
})->name('tiendaCliente');