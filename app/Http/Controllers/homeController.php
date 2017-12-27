<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clasificado;

class homeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clasificados = Clasificado::getClasificados();

        return view('home', compact('clasificados'));
    }
}
