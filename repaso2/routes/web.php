<?php

use App\Http\Controllers\controladorRepaso2;
use Illuminate\Support\Facades\Route;

Route::view('/','inicio')->name('rutainicio');
Route::view('/registro','registrolibro')->name('rutaregistro');
Route::post('/enviarLibro', [controladorRepaso2::class,'guardarLibro'])->name('rutaenviar');