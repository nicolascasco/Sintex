<?php

namespace App;

use Illuminate\Support\Facades\DB;
use App\Model;
use App\Pivot;

class Clasificado extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public $incrementing = false;

    public function auto()
    {
        return $this->hasOne('App\Auto');
    }

    public function inmueble()
    {
        return $this->hasOne('App\Inmueble');
    }

    public function moto()
    {
        return $this->hasOne('App\Moto');
    }

    public function producto()
    {
        return $this->hasOne('App\Producto');
    }

    public function servicio()
    {
        return $this->hasOne('App\Servicio');
    }

    public function preguntas()
    {
    	return $this->hasMany('App\Pregunta');
    }

    public function generateId($length)
    {
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet.= "0123456789";
        $max = strlen($codeAlphabet); // edited

        do {
            for ($i=0; $i < $length; $i++) {
                $token .= $codeAlphabet[random_int(0, $max-1)];
            }
            
            $clasificadoInTable = DB::select('select * from clasificados where id = :id', ['id' => $token]);
        } while ($clasificadoInTable != null);
        
        return $token;
    }
    
    public function publish(Model $model, $table)
    {
        switch ($table) {
            case 'auto':
                $m = $this->auto()->save($model);
                break;
            case 'inmueble':
                $m = $this->inmueble()->save($inmueble);
                break;
            case 'moto':
                $m = $this->moto()->save($model);
                break;
            case 'producto':
                $m = $this->producto()->save($model);
                break;
            case 'servicio':
                $m = $this->servicio()->save($model);
                break;
            default:
                break;
        }
        return $m;
    }

    public static function getClasificados()
    {
        return static::latest()->get();
    }

    public function pivotear($valor)
    {
        $p = Pivot::valor($valor)->first()->value;
        return ($p);
    }

    public static function buscar($texto)
    {
        return static::selectRaw('*')->where('titulo', 'LIKE', '%'.$texto.'%')
        ->get()
        ->toArray();
    }
}
