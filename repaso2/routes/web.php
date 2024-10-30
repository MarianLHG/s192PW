<?php

use App\Http\Controllers\controladorRepaso2;
use Illuminate\Support\Facades\Route;

Route::get('/',[controladorRepaso2::class,'home'])->name('rutainicio');
Route::get('/registro',[controladorRepaso2::class,'registro'])->name('rutaregistro');
Route::post('/enviarLibro', [controladorRepaso2::class,'guardarLibro'])->name('rutaenviar');
