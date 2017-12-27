<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Clasificado
;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$busqueda = '';

        /*if (isset(request(['busqueda']))) {
            $busqueda = request(['busqueda']);
        }*/
        //dd($busqueda);
        //return 'aaa';
        //$result = Clasificado::buscar($busqueda);
        
        return view('nuevo-auto');
    }
}
