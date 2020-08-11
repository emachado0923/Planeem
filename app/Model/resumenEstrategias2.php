<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class resumenEstrategias2 extends Model
{
    protected $primaryKey = 'id_resumenEstrategias2';
     
    protected $table = 'resumenEstrategias2';

    protected $fillable = [
        'id_Planeacion',
        'id_respustaverbos',
        'calificacion',
    ];

// 'Objetivo',
    public $timestamps=false;

}
