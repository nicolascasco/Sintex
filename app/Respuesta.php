<?php

namespace App;

class Respuesta extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function pregunta()
    {
    	return $this->belongsTo('App\Pregunta');
    }
}
