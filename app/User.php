<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function clasificados()
    {
        return $this->hasMany('App\Clasificado');
    }

    public function preguntas()
    {
        return $this->hasMany('App\Pregunta');
    }

    public function respuestas()
    {
        return $this->hasMany('App\Respuesta');
    }

    public function publish(Model $model, $val, $table)
    {  
        switch ($table) {
            case 'clasificado':
                $model->url = $val;
                $model->id = $model->generateId(11);
                $m = $this->clasificados()->save($model) ;
                break;
            case 'pregunta':
                $model->clasificado_id = $val;
                $m = $this->preguntas()->save($model);
                break;
            case 'respuesta':
                $model->pregunta_id = $val;
                $m = $this->respuestas()->save($model);
                break;
            default:
                break;
        }
        return $m;
    }
}
