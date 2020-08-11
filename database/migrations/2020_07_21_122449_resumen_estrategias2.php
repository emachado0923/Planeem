<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ResumenEstrategias2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumenEstrategias2', function (Blueprint $table) {
            $table->bigIncrements('id_resumenEstrategias2');
            $table->unsignedBigInteger("id_Planeacion");
            $table->foreign("id_Planeacion","fk_id_Planeacion_resumenEstrategias2")->references("id_Planeacion")->on("Planeacion");
            $table->integer('id_respustaverbos');
            // $table->string('Objetivos')->nullable();
            $table->string('calificacion');
            
            // $table->unsignedBigInteger('id_Matriz_crecimiento');
            // $table->foreign("id_Matriz_crecimiento","fk_estrategias_Matriz_crecimiento")->references("id")->on("Matriz_crecimiento");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resumenEstrategias2');
    }
}
