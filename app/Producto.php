<?php

namespace App;

class Producto extends Model
{
    public function clasificado()
    {
    	return $this->belongsTo('App\Clasificado');
    }
}
