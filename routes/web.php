<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administracion;
use App\Http\Controllers\Clientes\Clientes;
use App\Http\Controllers\Inventario\Catalogo;
use App\Http\Controllers\Servicios;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Administracion::class, 'index']); 

Route::get('informativo', [Administracion::class, 'informacion'] );

Route::get('clientes/preferidos', [Clientes::class, 'preferidos']);

Route::get('catalogo', [Catalogo::class, 'index'] );

Route::get('catalogo/registro', [Catalogo::class , 'formularioReg'])->name('registrarPro');

Route::post('catalogo/compra', [Catalogo::class , 'registrar'])->name('registrado');

Route::get('catalogo/perros', [Catalogo::class, 'perros']);

Route::get('catalogo/gatos', [Catalogo::class, 'gatos']);

// Rutas con parametros
Route::get('catalogo/{id}/{descripcion?}', [Catalogo::class, 'descripcion']);

Route::get('servicios/{descripcion}', [Servicios::class, 'index']);

















