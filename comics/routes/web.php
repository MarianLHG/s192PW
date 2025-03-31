<?php

use Illuminate\Support\Facades\Route;

Route::view('/RegistroProductos', 'productosRegistro')->name('productosRegistro');

Route::view('/Productos', 'todosProductos')->name('todosProductos');

Route::view('/agregarComic', 'comicsRegistro')->name('comicsRegistro');

Route::view('/agregarFigura', 'figurasRegistro')->name('figurasRegistro');

Route::view('/Admin', 'perfilAdmin')->name('perfilAdmin');

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

