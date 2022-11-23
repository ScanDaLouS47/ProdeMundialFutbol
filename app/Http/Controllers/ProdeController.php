<?php

namespace App\Http\Controllers;

use App\Models\DetalleProde;
use App\Models\Partido;
use App\Models\Prode;
use App\Models\Pronostico;
use App\Models\Resultado;
use Illuminate\Http\Request;

class ProdeController extends Controller
{
    public function index(Request $req){    
        $cantPartidos = Partido::all()->count();  

        $retValid = true;
                    
        for ($i=1; $i <= $cantPartidos; $i++) { 
            $validated = $req->validate([
                'p-'.$i.'-1' => 'required',
                'p-'.$i.'-2' => 'required'
            ]);
            (!$validated) ? $this->$retValid = false : $this->$retValid = true;
        }

        // echo var_dump($validated);

        if($retValid){
            $prode = new Prode();
            $prode->fecha_carga = date('Y-m-d');
            $prode->fecha_aprovacion = null;
            $prode->puntaje = 0;
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
        }else{            
            return redirect()->back()->withErrors($validated);            
        }
        
    }

    public function modify($id){
        $pronosticos = Pronostico::where('id_prode',$id)->orderBy('id_partido')->get();
        return $pronosticos;
    }

    public function cambiar(Request $req){
        $pronostico = Pronostico::where('id_prode', $req->id_prode)->where('id_partido', $req->id_partido)->first();
        $pronostico->goles_equipo_1 = $req->goles_equipo_1;
        $pronostico->goles_equipo_2 = $req->goles_equipo_2;
        $pronostico->save();
        $message = 'Se actualizo el pronostico.';
        return redirect()->route('prode')->with('messagepron', $message);        
    }

    public function cargaresultado(Request $req){
        if($req->id_partido == 0){
            $messageError = 'Debe seleccionar un partido.';
            return redirect()->route('resultados')->with('messageError', $messageError);  
        }else{
            $resultado = new Resultado();
            $resultado->goles_equipo_1 = $req->Equipo1;
            $resultado->goles_equipo_2 = $req->Equipo2;    
            $resultado->id_partido = $req->id_partido;  
            $resultado->save();    

            $partido = Partido::where('id',$req->id_partido)->first();            
            $partido->estado = 0;
            $partido->save();

            $pronosticos = Pronostico::where('id_partido',$req->id_partido)->get();
            // $pronosticos = Pronostico::all()->where('id_partido',$req->id_partido);  
            
            // DEBUG
            // echo count($pronosticos);

            // echo "<br>";

            foreach ($pronosticos as $key => $value) {
                $puntos = 0;

                // DEBUG
                // echo $value->goles_equipo_1." ".$value->goles_equipo_2;
                // echo "<br>";                

                if($value->goles_equipo_1 == $req->Equipo1 && $value->goles_equipo_2 == $req->Equipo2){
                    $puntos =  5;
                    // DEBUG
                    // echo "ENTRA EN 5";
                }elseif($value->goles_equipo_1 > $value->goles_equipo_2 && $req->Equipo1 > $req->Equipo2){
                    $puntos =  3;
                    // DEBUG
                    // echo "ENTRA EN 3 ATINO";
                }elseif($value->goles_equipo_1 < $value->goles_equipo_2 && $req->Equipo1 < $req->Equipo2){
                    $puntos =  3;
                    // DEBUG
                    // echo "ENTRA EN 3 ATINO";
                }elseif($value->goles_equipo_1 == $value->goles_equipo_2 && $req->Equipo1 == $req->Equipo2){
                    $puntos =  3;
                    // DEBUG
                    // echo "ENTRA EN 3 EMPATE";
                }else{
                    $puntos =  0;
                    // DEBUG
                    // echo "ENTRA EN 0";
                }  
                // DEBUG 
                // echo "<br>";                
                
                $prode = Prode::where('id', $value->id_prode)->first();

                // DEBUG
                // echo $prode;
                // echo "------------------------";
                // echo "<br>";

                $prode->puntaje += $puntos;

                $prode->save();    
                
                $detalle_prode = new DetalleProde();
                $detalle_prode->puntos = $puntos;
                $detalle_prode->id_prode = $value->id_prode;
                $detalle_prode->id_resultado = $resultado->id;

                $detalle_prode->save();

            }            

            $message = 'El resultado del partido se cargo correctamente.';                  
            return redirect()->route('resultados')->with('message', $message);
        }        
    }

    public function aprobar($id){
        $prode = Prode::where('id', $id)->first();
        $prode->estado = 1;
        $prode->save();

        $message = 'El prode se aprobo correctamente.';        
        return redirect()->route('usuarios.index')->with('message', $message);
    }
}
