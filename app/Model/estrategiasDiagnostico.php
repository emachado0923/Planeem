<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class estrategiasDiagnostico extends Model
{
    protected $primarykey="id";

    protected $table="estrategiasdiagnostico";

    public $fillable= [
        'id_estrategias',
        'id_Planeacion'
      ];
    


     public $timestamps=false;

    public function estrategia(){
        return $this->belongsTo('App\Models\estrategiasDiagnosticoSeed','id_estrategias');
    }  
    public function planeacion(){
        return $this->belongsTo('App\Models\Planeacion','id_Planeacion');
    }

}

