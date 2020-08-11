<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EstrategiasDiagnosticoSeedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estrategiasDiagnosticoSeed', function (Blueprint $table) {
            $table->bigIncrements('id_estrategias');
            //con este campo valido que me traiga todas las estrategias de la calificacion uno, dos, o tres
            //en el seeder a la calificacion uno le voy a dar a todas las estrategias el uno
            //a la segunda calificación le voy a dar la calificacion numero dos y hasta que lleguemos a la calificación tres
            $table->string('calificacion');

            //hace referencia a la vistas del item 11 la matriz de diagnostico
            // y los campos con solo que se van a dividir cada vista 
            $table->string('vista');

            //en este campo se contiene el valor de la estrategia
            $table->string('descripcion');

            //con esto determinamos si viaja a la tercer matriz
            $table->string('estado');
            
            //para que se valide que es con el id de planeacion que se maneja actual mente
            // $table->unsignedBigInteger("id_Planeacion");
            // $table->foreign("id_Planeacion","fk_estrategiasDiagnostico")->references("id_Planeacion")->on("Planeacion")->onDelete('restrict')->onUpdate('restrict');

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
        Schema::dropIfExists('estrategiasDiagnosticoSeed');
    }
}
