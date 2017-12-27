<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasificadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('clasificados', function (Blueprint $table) {
            $table->string('id')->unique();
            //contacto
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('email')->nullable();//email del dueño
            $table->integer('telefono')->nullable();//telefono del dueño
            //publicacion
            $table->string('titulo', 160);//titulo de la pubicacion
            $table->text('descripcion');//descripcion de la publicacion
            //vneta
            $table->integer('precio');
            $table->integer('provincia');
            $table->integer('ciudad');
            $table->string('url');
            //activacion del clasificado
            $table->dateTime('fechaInicio');
            $table->dateTime('fechaFin');
            $table->integer('activacion')->default(0);

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
        Schema::dropIfExists('clasificados');
        Schema::dropForeign('user_id');
    }
}
