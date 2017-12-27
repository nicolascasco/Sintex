<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    public function show(Producto $producto)
    {
    	return view('test', compact('producto'));
    }
}
