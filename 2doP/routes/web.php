<?php

use App\Http\Controllers\controladorValidaciones;
use Illuminate\Support\Facades\Route;

Route::get('/','formUsuarios');
Route::post('/enviarDatos',[controladorValidaciones::class,'validarUsuario'])->name('rutaenviar');
