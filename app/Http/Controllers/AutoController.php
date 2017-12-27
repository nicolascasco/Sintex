<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auto;
use App\Clasificado;
use App\Pivot;

class AutoController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:web', ['except' => ['show']]);
    }

    public function show()
    {
        $clasificado = Clasificado::find(request(['c']))->first();
        $auto = $clasificado->auto;
        
    	return view('auto-show', compact('auto', 'clasificado'));
    }

    public function create()
    {
        $p = new Pivot;
        $values = $p->buscar();
        return view('nuevo-auto', compact('values'));
    }

    public function store()
    {
        $this->validate(request(), [
            //Clasificado
            'email'       => 'email',
            'telefono'    => 'integer',
            'titulo'      => 'required|max:160',
            'descripcion' => 'required',
            'precio'      => 'required|integer',
            'provincia'   => 'required|numeric|min:0',
            'ciudad'      => 'required|numeric|min:0',
            //auto
            'tipo'        => 'required|numeric|min:0',
            'marca'       => 'required|numeric|min:0',
            'modelo'      => 'required|numeric|min:0',
            'year'        => 'required|numeric|min:0',
            'color'       => 'required|numeric|min:0',
            'km'          => 'required|numeric|min:0',
            'combustible' => 'required|numeric|min:0',
            'direccion'   => 'required|numeric|min:0',
            'transmision' => 'required|numeric|min:0',
            'traccion'    => 'required|numeric|min:0',
            'vidrios'     => 'required|numeric|min:0',
            'puertas'     => 'required|numeric|min:0',
            'estado'      => 'required|numeric|min:0',
            'vendedor'    => 'required|numeric|min:0'
        ]);

        $clasificado = auth()->user()->publish(new Clasificado(request(['email', 'telefono', 'titulo', 'descripcion', 'precio', 'provincia', 'ciudad'])), 'auto', 'clasificado');
    
        $auto = $clasificado->publish(new Auto(request(['tipo', 'marca', 'modelo', 'year', 'color', 'km', 'combustible',  'direccion', 'transmision', 'traccion', 'vidrios', 'puertas', 'estado', 'vendedor'])), 'auto');

        return redirect('/auto?c='.urlencode($auto->clasificado_id));
    }
}
