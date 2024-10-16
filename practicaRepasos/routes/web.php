<?php

use Illuminate\Support\Facades\Route;

Route::view('/',view: 'inicio')->name('rutainicio');
Route::view('/repaso1',view: 'repaso1')->name('rutarepaso1');