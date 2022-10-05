<?php

namespace App\Http\Controllers;

use App\Models\Prode;
use Illuminate\Http\Request;

class ProdeController extends Controller
{
    public function index(Request $req){   
        $prode = new Prode();
        $prode->fecha_carga = date('Y-m-d');
        $prode->fecha_aprovacion = null;
        $prode->estado = 0;
        $prode->id_usuario = 1;

        $prode->save();

        $idSE = $prode->id;

        echo "ID: ".$idSE;

        for ($i=0; $i < 6; $i++) { 
            echo $req['p-'.$i.'-1'];
            echo $req['p-'.$i.'-2'];
        }     
        
    }
}
