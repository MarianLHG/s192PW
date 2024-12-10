<?php

use App\Http\Controllers\controladorValidaciones;
use Illuminate\Support\Facades\Route;

Route::get('/', [controladorValidaciones::class, 'form'])->name('rutaform');
Route::post('/enviardatos', [controladorValidaciones::class, 'validarUsuario'])->name('rutaenviar');
Route::view('/componentes', 'componentes')->name('rutacomponentes');
