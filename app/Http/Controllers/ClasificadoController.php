<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clasificado;
use App\Pregunta;
use App\Respuesta;
//
use Illuminate\Support\Facades\DB;

class ClasificadoController extends Controller
{
    public function index()
    {
    	return view('home');
    }
}
