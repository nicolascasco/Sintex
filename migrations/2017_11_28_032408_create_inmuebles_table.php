<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            //$table->string('id', 11);
            $table->string('clasificado_id');
            $table->foreign('clasificado_id')->references('id')->on('clasificados')->onDelete('cascade');
            //publicacion
            $table->integer('inmueble');
            $table->integer('operacion');        
            $table->integer('vendedor');
            $table->integer('supTotal')->unsigned();
            $table->integer('supConstruida')->unsigned()->nullable();
            $table->string('direccion');
            //mas caracteristicas
            $table->tinyInteger('ambiente');
            $table->tinyInteger('baño');
            $table->integer('estado');

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
        Schema::dropIfExists('inmuebles');
        Schema::dropForeign(['clasificado_id']);
    }
}
