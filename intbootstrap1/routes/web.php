<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controladoreVistas;
Route::get('/',[controladoreVistas::class, 'home'])->name('rutainicio');
Route::get('/form',[controladoreVistas::class, 'formulario'])->name('rutaformulario');
Route::get('/clientes',[controladoreVistas::class, 'consulta'])->name('rutaclientes');
Route::view('/componentes','componentes')->name(name: 'rutacomponentes');




















//ruta de tipo GET
/*Route::get('/', function () {
    return view('welcome');
});*/

//ruta de tipo view
/* Route::view('/',view: 'inicio')->name('rutainicio');
Route::view('/form','formulario')->name(name: 'rutaformulario');
Route::view('/clientes','clientes')->name(name: 'rutaclientes');
Route::view('/componentes','componentes')->name(name: 'rutacomponentes');
 */


