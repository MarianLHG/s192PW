<?php

use Illuminate\Support\Facades\Route;

Route::view('/','welcome')->name('rutainicio');
Route::view('/registro','registrolibro')->name('rutaregistro');

