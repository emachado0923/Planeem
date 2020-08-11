<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GuardarResumenEstrategias2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
        {   Schema::create('guardarEstrategias', function (Blueprint $table) {
        
            $table->bigIncrements('id_guardar');
            $table->unsignedBigInteger("id_Planeacion");
            $table->integer('id_formulacionEstrategias');
            $table->foreign("id_Planeacion","fk_formulacionEstrategiasGuardar")->references("id_Planeacion")->on("Planeacion")->onDelete('restrict')->onUpdate('restrict');
            $table->string("accion");
            $table->string("presupuesto");
            $table->string("tiempo");
            $table->string("responsable");
        
        });
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guardarEstrategias');
    }
}
