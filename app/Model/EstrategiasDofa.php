<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EstrategiasDofa extends Model
{

    
    protected $primarykey="id_Estrategias_Dofa";

    protected $table="Estrategias_Dofa";

    public $fillable= [
        
        'id_Planeacion',
        'id_Estrategias_Ofensivas',
        'descripcion'
      ];
    

      public $tipo=false;
       public $timestamps=false;
}
