<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Estrategias_Ofensivas extends Model
{
    

    protected $primarykey="id_Estrategias_Ofensivas";

    protected $table="Estrategias_Ofensivas";

    public $fillable= [
        
        'id_Planeacion',
        'id_respuesta_analisis',
        'id_respuesta_capacidad',
        'tipo'
      ];
    


     public $timestamps=false;




}
