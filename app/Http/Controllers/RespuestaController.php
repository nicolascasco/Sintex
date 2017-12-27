<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Respuesta;
use App\User;

class RespuestaController extends Controller
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

        $totalOfClasificados = sizeof(auth()->user()->clasificados);

        for ($i=0; $i < $totalOfClasificados; $i++) { 
            if (auth()->user()->clasificados[$i]->id == request(['clasificado'][0])) {
                auth()->user()->publish(new Respuesta(request(['texto'])), $id, 'respuesta');                                
            }
        }
        return redirect()->back();
    }
}
