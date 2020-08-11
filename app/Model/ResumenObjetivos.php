<?php
//Este modelo es el que le va a guardar todo lo del modulo 4
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ResumenObjetivos extends Model
{
    protected $table = "resumen_objetivos";

    protected $fillable = [
        "objetivos_v", "nombre_indicador", "lo_que_se_va_a_medir","sobre_lo_que_se_va_a_medir"
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
