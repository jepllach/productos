<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;
class productosController extends Controller
{
    public static function listar(){
        $productos = productos::all()->toArray();
        return response()->json($productos, 200);
    }
    public static function agregar(Request $request){
        $req = $request->all();
        $producto = new productos();
        $producto->fill($req);
        
        $producto->save();
        return response()->json(['error'=>0,],200);
    }
    public static function mostrar($id){
        $producto = productos::find($id);
        return response()->json(['producto'=>$producto,],200);
    }
    public static function actualizar($id, Request $request) {
        $req = $request->all();
        $producto = productos::find($id);
        
        $producto->fill($req);
        $producto->save();
        return response()->json(['error' => 0], 200);
    }
    public static function eliminar($id){
        productos::destroy($id);
        return response()->json(['error' => 0], 200);
    }
}
