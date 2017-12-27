<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servico;

class ServicioController extends Controller
{
    public function show(Servico $servicio)
    {
    	return view('test', compact('servicio'));
    }
}
