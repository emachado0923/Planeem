<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionFactoresTalbe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion_factores', function (Blueprint $table) {
            $table->bigIncrements('id_Evaluacion_Factores');
            $table->string('tipo');
            $table->unsignedBigInteger("id_Planeacion");
            $table->foreign("id_Planeacion","fk_evaluacion_factores")->references("id_Planeacion")->on("Planeacion");
            $table->unsignedBigInteger("id_respuesta_analisis_porters")->nullable();
            //$table->foreign("id_respuesta_analisis_porters","fk_respuesta_analisis_porters")->references("id")->on("respuesta_analisis_porters");
            $table->decimal('Peso_Relativo');
            $table->decimal('Calificación');
            $table->decimal('Peso_Ponderado');
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
        Schema::dropIfExists('evaluacion_factores');
    }
}
