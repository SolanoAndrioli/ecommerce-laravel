<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('producto', function (Blueprint $table) {
            $table->bigIncrements('Idproducto');
            $table->string('Nombre');
            $table->foreign('Idcategoria')->references('Idcatgoria')->on('categorias');
            $table->string('Talle');
            $table->string('Precio');
            $table->boolean('Stock');
            $table->string('Descripcion');
            $table->string('Img');
            $table->string('Cantidad');
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
        //
        Schema::drop('producto');
    }
}