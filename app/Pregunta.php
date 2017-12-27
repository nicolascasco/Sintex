<?php

namespace App;

class Pregunta extends Model
{

	public function respuestas()
	{
		return $this->hasMany('App\Respuesta');// cambiar por ->hasMany(); => trae un array y debe utilizarse un foreach para cada respuesta //hasOne
	}

	public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function clasificado()
    {
    	return $this->belongsTo('App\Clasificado');
    }
}
