<?php
namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function index(){        
        $usuarios = Usuario::orderBy('id', 'desc')->paginate();
        return view('usuarios', compact('usuarios'));
    }

    public function store(Request $req){
        $usuario = new Usuario();

        $usuario->nombre = $req->nombre;
        $usuario->dni = $req->dni;
        $usuario->telefono = $req->telefono;
        $usuario->password = md5($req->password);
        $usuario->puntaje = 0;
        $usuario->estado = 1;
        
        // $message = 'asd';
        $usuario->save() ? $resp = 'ok' : $resp = 'not';                 

        return redirect()->route('login')->with('resp',$resp);
    }

    public function login(Request $req){
        $usuario = Usuario::where('dni', $req->dni)->where('password', md5($req->password))->first();        
        echo var_dump($usuario);
        // return redirect()->route('prode');              
    }
}
