<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstrategiasMatrizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estrategias_matriz', function (Blueprint $table) {
            $table->bigIncrements('id_estrategias_matriz');
            $table->unsignedBigInteger("id_Planeacion");
            $table->foreign("id_Planeacion","fk_id_Planeacion_Dofa")->references("id_Planeacion")->on("Planeacion");
            $table->unsignedBigInteger('id_Matriz_crecimiento');
            $table->foreign("id_Matriz_crecimiento","fk_estrategias_Matriz_crecimiento")->references("id")->on("Matriz_crecimiento");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estrategias_matriz');
    }
}
