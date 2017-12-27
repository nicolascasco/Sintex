<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            //$table->string('id', 11);
            $table->string('clasificado_id');
            $table->foreign('clasificado_id')->references('id')->on('clasificados')->onDelete('cascade');
            //publicacion
            $table->integer('categoria');

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
        Schema::dropIfExists('servicios');
        Schema::dropForeign(['clasificado_id']);
    }
}
