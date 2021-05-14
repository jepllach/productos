<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\comentariosProductos;
use App\Models\productos;
class comentariosController extends Controller
{
    public static function cargarComentarioProductos(){
        $productos = productos::all()->toArray();
        $arrProductosComentarios = array();
        foreach ($productos as $index => $producto) {
            $arrProductosComentarios[] = $producto;
            $arrProductosComentarios[$index]['comentarios']  = array();
            $comentarios = DB::table('comentarios_productos')
            ->where('productoId','=',$producto['id'])->get()->toArray();
            $arrProductosComentarios[$index]['comentarios'] = $comentarios;
        }
        return response()->json($arrProductosComentarios, 200);
    }
    public static function agregarComentario(Request $request){
        $req = $request->all();
        $comentario = new comentariosProductos();
        $comentario->fill($req);
        $comentario->save();
        return response()->json(['error' => 0 ], 200);
    }
}
