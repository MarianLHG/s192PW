<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladoreVistas;
use App\Http\Controllers\clienteController;

// controlador vistas
Route::get('/',[controladoreVistas::class, 'home'])->name('rutainicio');
Route::view('/componentes','componentes')->name( 'rutacomponentes');
Route::post('/enviarCliente', [controladoreVistas::class, 'procesarCliente'])->name('rutaEnviar');

// controlador cliente
Route::get('/cliente/create',[clienteController::class, 'create'])->name('rutaformulario');
Route::post('/cliente', [clienteController::class, 'store'])->name('enviaCliente');
Route::get('/cliente',[clienteController::class, 'index'])->name('rutaclientes');
Route::get('/clientes/{id}/edit',[clienteController::class,'edit'])->name(name: 'editarCliente');
Route::put('/clientes/{id}',[clienteController::class,'update'])->name(name: 'clientesUpdate');
Route::delete('/clientes/{id}',[clienteController::class,'destroy'])->name(name: 'clientesEliminar');



















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


