<?php

namespace App\Http\Controllers;

use App\Models\Partido;
use App\Models\Prode;
use App\Models\Pronostico;
use Illuminate\Http\Request;

class ProdeController extends Controller
{
    public function index(Request $req){    
        $cantPartidos = Partido::all()->count();  
                    
        for ($i=1; $i <= $cantPartidos; $i++) { 
            $validated = $req->validate([
                'p-'.$i.'-1' => 'required',
                'p-'.$i.'-2' => 'required'
            ]);
        }

        if($validated){
            $prode = new Prode();
            $prode->fecha_carga = date('Y-m-d');
            $prode->fecha_aprovacion = null;
            $prode->estado = 0;
            $prode->id_usuario = auth()->user()->id; 
            $prode->save();

            $id_prode = $prode->id;                
            
             
            for ($i=1; $i <= $cantPartidos; $i++) {             
                $pronostico = new Pronostico();
                $pronostico->goles_equipo_1 = (int)$req['p-'.$i.'-1'];
                $pronostico->goles_equipo_2 = (int)$req['p-'.$i.'-2'];
                $pronostico->id_partido = $i;
                $pronostico->id_prode = $id_prode;
                $pronostico->save();
            }     
            $message = 'El prode se cargo correctamente.';
            return redirect()->route('prode')->with('message', $message);
        }
        
    }
}
