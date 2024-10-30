<?php

use App\Http\Controllers\controladorRepaso2;
use Illuminate\Support\Facades\Route;

Route::get('/',[controladorRepaso2::class,'inicio'])->name('rutainicio');
Route::get('/registro',[controladorRepaso2::class,'rutaregistro'])->name('rutaregistro');
Route::post('/enviarLibro', [controladorRepaso2::class,'guardarLibro'])->name('rutaenviar');