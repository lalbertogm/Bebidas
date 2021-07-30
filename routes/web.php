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

Route::get('obtener/bebidaslimon', [bebidasController::class,'obtenerBebidasLimon'])->name("obtener.bebidaLimon");
Route::get('obtener/bebidasSandia', [bebidasController::class,'obtenerBebidasSandia'])->name("obtener.bebidaSandia");
Route::get('obtener/bebidasCereza', [bebidasController::class,'obtenerBebidasCereza'])->name("obtener.bebidaCereza");
Route::get('obtener/bebidasMango', [bebidasController::class,'obtenerBebidasMango'])->name("obtener.bebidaMango");
Route::get('obtener/bebidasNaranja', [bebidasController::class,'obtenerBebidasNaranja'])->name("obtener.bebidaNaranja");
Route::get('/Limon', [bebidasController::class,'Limon'])->name("set.bebidaLimon");