<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EstrategiasDiagnosticoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('estrategiasDiagnostico', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_estrategias');
            $table->foreign("id_estrategias","fk_estrategiasDiagnostico1")->references("id_estrategias")->on("estrategiasDiagnosticoSeed");
            $table->unsignedBigInteger("id_Planeacion");
            $table->foreign("id_Planeacion","fk_estrategiasDiagnostico2")->references("id_Planeacion")->on("Planeacion");
            // $table->timestamps();
        });    
    }

    /**i
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estrategiasDiagnostico');
    }
}
