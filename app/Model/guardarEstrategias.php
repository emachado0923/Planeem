<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class guardarEstrategias extends Model
{
    protected $table = "guardarEstrategias";

    // public $primarykey = 'id_Matriz_crecimiento' ;

    protected $fillable =[
        'id_Planeacion',
        'id_formulacionEstrategias',
        'accion',
        'presupuesto',
        'tiempo',
        'responsable',
    ];

    public $timestamps = false;
}
