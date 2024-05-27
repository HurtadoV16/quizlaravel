<?php

namespace App\Http\Controllers;

use App\Models\persona_vehiculo;
use App\Http\Requests\Storepersona_vehiculoRequest;
use App\Http\Requests\Updatepersona_vehiculoRequest;
use App\Models\persona;
use App\Models\vehiculo;
use Illuminate\Http\Request;

class PersonaVehiculoController extends Controller
{
    public function asociar(){

        $personas=persona::all();

        $vehiculos=vehiculo::all();


        return view('asociar',compact('personas','vehiculos'));
    }


    public function store(Request $request)
    {
        $persona=persona::find($request->persona_id);
        $persona->vehiculos()->attach($request->vehiculo_id);
    }
}
