<?php

use Illuminate\Support\Facades\Route;

//ruta de tipo GET
/*Route::get('/', function () {
    return view('welcome');
});*/

//ruta de tipo view
Route::view('/',view: 'welcome');
Route::view('/form', 'formulario');
