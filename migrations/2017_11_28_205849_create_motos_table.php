<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motos', function (Blueprint $table) {
            //$table->string('id', 11);
            $table->string('clasificado_id');
            $table->foreign('clasificado_id')->references('id')->on('clasificados')->onDelete('cascade');
            //publicacion
            $table->integer('tipo');//tipo de moto
            $table->integer('marca');
            $table->integer('modelo');
            $table->integer('cilindrada');
            $table->integer('year');
            $table->integer('color');
            //caracteristicas generales
            $table->integer('arranque');
            $table->integer('frenos');
            //motor
            $table->integer('tipo_motor');
            $table->integer('marca_motor');
            $table->integer('modelo_motor');
            $table->integer('km');

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
        Schema::dropIfExists('motos');
        Schema::dropForeign(['clasificado_id']);
    }
}
