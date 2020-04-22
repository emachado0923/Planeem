<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aptitud extends Model
{

    protected $table = 'aptituds';

    protected $fillable = [
        'descripcion',
        'idaptitud'
    ];

}
