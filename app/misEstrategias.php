<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class misEstrategias extends Model
{
    protected $primarykey="id_mis_estrategias";
    protected $table="mis_estrategias";
    public $fillable= [
        'estrategia',
        'id_Planeacion'
    ];

    public $timestamps=false;
}
