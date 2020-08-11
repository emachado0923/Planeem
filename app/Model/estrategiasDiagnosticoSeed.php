<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class estrategiasDiagnosticoSeed extends Model
{
    protected $primarykey="id_estrategias";

    protected $table="estrategiasDiagnosticoSeed";

    public $fillable= [
        'calificacion',
        'vista',
        'descripcion',
        'estado',
      ];
}

