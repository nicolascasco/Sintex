<?php

namespace App;

class Servicio extends Model
{
    public function clasificado()
    {
    	return $this->belongsTo('App\Clasificado');
    }
}
