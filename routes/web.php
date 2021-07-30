<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bebidasController;



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

Route::get('/', function () {
    return view('welcome');
});
//Rutas para poblar BD 
Route::get('obtener/bebidaslimon', [bebidasController::class,'obtenerBebidasLimon'])->name("obtener.bebidaLimon");
Route::get('obtener/bebidasSandia', [bebidasController::class,'obtenerBebidasSandia'])->name("obtener.bebidaSandia");
Route::get('obtener/bebidasCereza', [bebidasController::class,'obtenerBebidasCereza'])->name("obtener.bebidaCereza");
Route::get('obtener/bebidasMango', [bebidasController::class,'obtenerBebidasMango'])->name("obtener.bebidaMango");
Route::get('obtener/bebidasNaranja', [bebidasController::class,'obtenerBebidasNaranja'])->name("obtener.bebidaNaranja");
//Rutas para pintar los datos, formato JSON
Route::get('/JLimon', [bebidasController::class,'JLimon'])->name("jsonBebidaLimon");
Route::get('/JSandia', [bebidasController::class,'JSandia'])->name("jsonBebidaSandia");
Route::get('/JCereza', [bebidasController::class,'JCereza'])->name("jsonBebidaCereza");
Route::get('/JMango', [bebidasController::class,'JMango'])->name("jsonBebidaMango");
Route::get('/JNaranja', [bebidasController::class,'JNaranja'])->name("jsonBebidaNaranja");
//Rutas para pintar los datos, formato HTML
Route::get('/HLimon', [App\Http\Controllers\bebidasController::class, 'Limon'])->name('BebidaL');
Route::get('/HSandia', [App\Http\Controllers\bebidasController::class, 'Sandia'])->name('BebidaS');
Route::get('/HCereza', [App\Http\Controllers\bebidasController::class, 'Cereza'])->name('BebidaC');
Route::get('/HMango', [App\Http\Controllers\bebidasController::class, 'Mango'])->name('BebidaM');
Route::get('/HNaranja', [App\Http\Controllers\bebidasController::class, 'Naranja'])->name('BebidaN');