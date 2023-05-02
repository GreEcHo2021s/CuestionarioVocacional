<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\RespuestaController;

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
// Ruta del inicio
Route::get('/', function () {
    return view('welcome');
});
// Ruta del cuestionario 
Route::get('/cuestionario', function () {
    return view('cuestionario');
});

Route::get('/preguntas/{area}', [PreguntaController::class, 'preguntasPorArea']);

Route::resource('usuario', UsuarioController::class);

Route::post('/respuestas', [RespuestaController::class, 'store'])->name('respuestas.store');

Route::get('/conclusion',function(){
    return view('conclusion');
});