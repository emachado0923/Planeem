<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class comentarios extends Model
{
     
    protected $table = 'preguta';

    protected $fillable = [
        'Nombre',
        'Correo',
        'Mensaje'
    ];


    // public $timestamps=false;
}
