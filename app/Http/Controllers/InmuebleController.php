<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inmueble;

class InmuebleController extends Controller
{
    public function show(Inmueble $inmueble)
    {
    	return view('test', compact('inmueble'));
    }
}
