<?php

namespace App;

class Auto extends Model
{
    public function clasificado()
    {
    return $this->belongsTo('App\Clasificado');
    }
}
