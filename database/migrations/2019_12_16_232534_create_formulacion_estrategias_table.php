<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormulacionEstrategiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulacionEstrategias', function (Blueprint $table) {
            $table->bigIncrements('id_formulacionEstrategias');
            $table->unsignedBigInteger("id_Planeacion");
            $table->foreign("id_Planeacion","fk_formulacionEstrategias")->references("id_Planeacion")->on("Planeacion")->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger("id_respustaverbos");
            $table->foreign("id_respustaverbos","fk_id_respustaverbos")->references("id_respustaverbos")->on("respustaverbos")->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger("id_estrategia");
            $table->foreign("id_estrategia","fk_id_estrategia")->references("id_estrategia")->on("estrategia")->onDelete('restrict')->onUpdate('restrict');
            $table->string('pocision');
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
        Schema::dropIfExists('formulacionEstrategias');
    }
}
