<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            //$table->increments('id');
            $table->string('clasificado_id');
            $table->foreign('clasificado_id')->references('id')->on('clasificados')->onDelete('cascade');
            //publicacion
            $table->integer('categoria');
            $table->integer('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
        Schema::dropForeign(['clasificado_id']);
    }
}
