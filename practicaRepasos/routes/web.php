<?php

use App\Http\Controllers\controladorConversion;
use Illuminate\Support\Facades\Route;

Route::get('/',[controladorConversion::class, 'home'])->name('rutainicio');
Route::get('/repaso1',[controladorConversion::class, 'repaso1'])->name('rutarepaso1');
Route::post('/conversionUnidades',[controladorConversion::class, 'conversion'])->name('rutaconversion');
