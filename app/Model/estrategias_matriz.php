<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class estrategias_matriz extends Model
{
    protected $table = 'estrategias_matriz';

    protected $primarykey = 'id_estrategias_matriz' ;

    protected $fillable = ['id_Planeacion','id_Matriz_crecimiento'];

    public $timestamps=false;

    public function Matriz_crecimiento(){
        return $this->belongsTo('App\Models\Matriz_crecimiento','id');
    }  
    
    public function planeacion(){
        return $this->belongsTo('App\Models\Planeacion','id_Planeacion');
    }
}
