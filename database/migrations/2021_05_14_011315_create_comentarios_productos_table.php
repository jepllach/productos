<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios_productos', function (Blueprint $table) {
            $table->id();
            $table->string("comentario");
            $table->unsignedBigInteger('productoId');
            $table->foreign('productoId')
            ->references('id')
            ->on('productos')
            ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarios_productos');
    }
}
