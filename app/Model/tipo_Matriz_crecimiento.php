<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tipo_Matriz_crecimiento extends Model
{
    protected $primaryKey = 'id_tipo_Matriz_crecimiento';
     
    protected $table = 'tipo_Matriz_crecimiento';

    protected $fillable = [
        'Matriz',
        'tipo'
    ];

    public $timestamps=false;
}
