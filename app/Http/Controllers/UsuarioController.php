<?php
namespace App\Http\Controllers;

// use App\Models\Usuario;

use App\Models\Prode;
use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function index(){        
        $usuarios = User::orderBy('id', 'desc')->paginate();        
        return view('usuarios', compact('usuarios'));
    }

    public function store(Request $req){

        $busUser = User::where('dni', $req->dni)->first();

        if($busUser){
            $resp = 'existedni';
            return redirect()->route('registro')->with('resp',$resp);
        }else{
            $usuario = new User();
    
            $usuario->name = $req->nombre;
            $usuario->dni = $req->dni;
            $usuario->telefono = $req->telefono;
            $usuario->password = md5($req->password);
            $usuario->puntaje = 0;
            $usuario->estado = 1;
            
            // $message = 'asd';
            $usuario->save() ? $resp = 'ok' : $resp = 'not';                 
    
            return redirect()->route('login')->with('resp',$resp);
        }

    }

    public function login(Request $req){
        $usuario = User::where('dni', $req->dni)->where('password', md5($req->password))->first();        
        // echo var_dump($usuario);
        return redirect()->route('prode');              
    }

    public function modify($id){
        $prodes = Prode::where('id_usuario',$id)->orderBy('fecha_carga')->get();
        return $prodes;
    }

    // public function cambiar(Request $req){
    //     $pronostico = Pronostico::where('id_prode', $req->id_prode)->where('id_partido', $req->id_partido)->first();
    //     $pronostico->goles_equipo_1 = $req->goles_equipo_1;
    //     $pronostico->goles_equipo_2 = $req->goles_equipo_2;
    //     $pronostico->save();
    //     $message = 'Se actualizo el pronostico.';
    //     return redirect()->route('prode')->with('messagepron', $message);        
    // }
}
