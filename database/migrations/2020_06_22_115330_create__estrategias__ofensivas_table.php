<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstrategiasOfensivasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Estrategias_Ofensivas', function (Blueprint $table) {
            $table->bigIncrements('id_Estrategias_Ofensivas');
            $table->unsignedBigInteger("id_Planeacion");
            $table->foreign("id_Planeacion","fk_Estrategias_Ofensivas")->references("id_Planeacion")->on("Planeacion");
            $table->unsignedBigInteger('id_respuesta_analisis')->nullable();
            // $table->foreign("id_respuesta_analisis","fk_respuesta_analisisa")->references("id")->on("respuesta_analisis");
            $table->unsignedBigInteger('id_respuesta_capacidad')->nullable();
            // $table->foreign("id_respuesta_capacidad","fkrespuesta_capacida")->references("id")->on("respuesta_capacidad");
            $table->string('tipo');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Estrategias_Ofensivas');
    }
}
