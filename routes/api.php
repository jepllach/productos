<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productosController;
use App\Http\Controllers\comentariosController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('productos/agregar', [productosController::class,'agregar']);
Route::get('productos/{id}', [productosController::class,'mostrar']);
Route::put('productos/{id}', [productosController::class,'actualizar']);
Route::delete('productos/{id}', [productosController::class,'eliminar']);

Route::get('comentariosProductos', [comentariosController::class,'cargarComentarioProductos']);
Route::post('comentariosProductos/agregarComentario', [comentariosController::class,'agregarComentario']);

