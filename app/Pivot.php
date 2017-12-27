<?php

namespace App;

use Illuminate\Support\Facades\DB;

class Pivot extends Model
{
    public static function buscar()
    {	
    	$result = DB::table('pivot')->get();
    	return $result;
    }

    public static function valor($key)
    {
    	return static::selectRaw('value')->from('pivot')->where('id', '=', $key)->get();
    }

    public function insertar($value)
    {
    	DB::table('pivot')->insert([
    		'value' => $value
    	]);
    }

    public function borrar($key)
    {
    	DB::table('pivot')->where('key', '=', $key)->delete();
    }
}
