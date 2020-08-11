<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EstrategiasDofaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
         Schema::create('Estrategias_Dofa', function (Blueprint $table) {
            $table->bigIncrements('id_Estrategias_Dofa');
            $table->unsignedBigInteger("id_Planeacion");
            $table->foreign("id_Planeacion","fk_Estrategias_Dofa")->references("id_Planeacion")->on("Planeacion");
            $table->integer('id_Estrategias_Ofensivas')->nullable();
            // $table->foreign("id_Estrategias_Ofensivas","fk_id_Estrategias_Dofa")->references("id_Estrategias_Ofensivas")->on("estrategias_ofensivas")->onDelete('restrict')->onUpdate('restrict');
            $table->string('descripcion')->nullable();
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
        Schema::dropIfExists('Estrategias_Dofa');
    }
}
