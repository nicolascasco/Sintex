<?php

namespace App;

class Moto extends Model
{
    public function clasificado()
    {
    	return $this->belongsTo('App\Clasificado');
    }
}
