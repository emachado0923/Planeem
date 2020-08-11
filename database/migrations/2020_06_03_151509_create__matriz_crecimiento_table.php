<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatrizCrecimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Matriz_crecimiento', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('respuesta');
            // $table->integer('tipo');
            $table->unsignedBigInteger('id_Planeacion');
            $table->foreign('id_Planeacion')->references('id_Planeacion')->on('Planeacion');
            $table->unsignedBigInteger('id_tipo_Matriz_crecimiento');
            $table->foreign('id_tipo_Matriz_crecimiento')->references('id')->on('tipo_Matriz_crecimiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Matriz_crecimiento');
    }
}
