<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Matriz_crecimiento extends Model
{
    protected $table = "Matriz_crecimiento";

    // public $primarykey = 'id_Matriz_crecimiento' ;

    protected $fillable =[
        'respuesta',
        'id_Planeacion',
        'tipo',
        'id_tipo_Matriz_crecimiento'
    ];

    public $timestamps =false;
    
    public function id_Planeacion(){
        return $this->belongsTo('App\Model\Proyectos','id_Planeacion');
    }

    public function id_tipo_Matriz_crecimiento(){
        return $this->belongsTo('App\Model\tipo_Matriz_crecimiento','id_tipo_Matriz_crecimiento');
    }
}
    