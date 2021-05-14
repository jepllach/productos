<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productosController;
use App\Http\Controllers\comentariosController;

Route::post('productos/agregar', [productosController::class,'agregar']);
Route::get('productos/{id}', [productosController::class,'mostrar']);
Route::put('productos/{id}', [productosController::class,'actualizar']);
Route::delete('productos/{id}', [productosController::class,'eliminar']);

Route::get('comentariosProductos', [comentariosController::class,'cargarComentarioProductos']);
Route::post('comentariosProductos/agregarComentario', [comentariosController::class,'agregarComentario']);

