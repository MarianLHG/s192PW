<?php

use App\Http\Controllers\controladorVistas;
use Illuminate\Support\Facades\Route;

Route::get('/',[controladorVistas::class, 'home'])->name('rutainicio');
Route::get('/form',[controladorVistas::class,'form'])->name('rutaform');
Route::get('/lista',[controladorVistas::class, 'lista'])->name('rutalista');
Route::post('/fm',[controladorVistas::class,'pContacto'])->name('rutafrm');
