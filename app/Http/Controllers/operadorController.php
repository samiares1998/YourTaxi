<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tarifaafiliacion;
use App\ubicacion;
use App\cliente;
use App\conductors;
class operadorController extends Controller
{
    
        public function inicioxml($id) {



                $sql = ubicacion::all();
                $cliente = cliente::find($id);
                $conductores= conductors::all();
                return view('operador.inicio', ["sql" => $sql],["cliente" => $cliente])->with('conductores', $conductores);
        }

        
public function listadoTarifa(){

        $tarifas=tarifaafiliacion::all();
      
     
        return view('operador.tarifa',["tarifas"=>$tarifas]);
}



 public function listadoclientes()
    {
    
        $clientes=cliente::all();
     
        return view('operador.listar',["clientes"=>$clientes]);
    }













}
