<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    
});

#Lo que esta a la izquierda es el nombre de la ruta y lo de la derecha la ubicacion
Route::view('/principio', '/inicio');
Route::view('/soporte', '/preguntas');
Route::view('/micuenta', '/contacto');

#tienda
Route::view('/catalogo', '/tienda/catalogo');
Route::view('/producto', '/tienda/producto');
