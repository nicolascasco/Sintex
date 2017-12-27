<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Moto;

class MotoController extends Controller
{
    public function show(Moto $moto)
    {
    	return view('test', compact('moto'));
    }
}
