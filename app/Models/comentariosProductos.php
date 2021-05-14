<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comentariosProductos extends Model
{
    use HasFactory;
    protected $fillable = ["productoId","comentario"];
    protected $table = "comentarios_productos";
}
