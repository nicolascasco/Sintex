<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            //$table->string('id', 11);
            $table->string('clasificado_id');
            $table->foreign('clasificado_id')->references('id')->on('clasificados')->onDelete('cascade');
            //publicacion
            $table->integer('tipo');//tipo de vehiculo (auto, moto, colectivo, etc)
            $table->integer('marca');
            $table->integer('modelo');
            $table->integer('year');
            $table->integer('color');
            //caracteristicas generales
            $table->integer('km');
            $table->integer('combustible');
            $table->integer('direccion');
            $table->integer('transmision');
            $table->integer('traccion');
            $table->integer('vidrios');
            $table->integer('puertas');
            $table->integer('estado');
            //
            $table->integer('vendedor');

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
        Schema::dropIfExists('autos');
        Schema::dropForeign(['clasificado_id']);
    }
}
