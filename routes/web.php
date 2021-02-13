<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registroPruebaBasicaController;

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

Route::get('/',[registroPruebaBasicaController::class, 'index'])->name('registro');
Route::post('/registro/prueba',  [registroPruebaBasicaController::class, 'store'])->name('registro.create');
Route::get('/exito',[registroPruebaBasicaController::class, 'exito']);