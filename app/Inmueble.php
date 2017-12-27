<?php

namespace App;

class Inmueble extends Model
{
    public function clasificado()
    {
    	return $this->belongsTo('App\Clasificado');
    }
}
