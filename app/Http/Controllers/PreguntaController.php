<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pregunta;

class PreguntaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function store($id)
    {   
    	$this->validate(request(), [
    		'texto' => 'required'
    	]);

    	auth()->user()->publish(new Pregunta(request(['texto'])), $id, 'pregunta');

        return redirect()->back();
    }

    public function delete($id)
    {
        $pregunta = Pregunta::find(3);
        //$clasificado = App\Clasificado::find(request(['clasificado'][0]);
        return $pregunta;
        /*if (auth()->user()->id == $pregunta->user()->id) {
            $pregunta->delete();
        }
    
        return redirect()->back();*/
    }
}
