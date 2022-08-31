<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $req){        
        // $usuarios = Usuario::orderBy('id', 'desc')->paginate();
        // return view('usuarios', compact('usuarios'));

        try {
            $usuario = Usuario::where('dni', $req->dni)->where('password', md5($req->password))->first(); 
            if($usuario){
                return redirect()->route('home');  
            }else{
                $message = 'El dni o contraseña no son correctos';
                return redirect()->route('login')->with('message', $message);
            }   
            // return redirect()->route('home');  
        } catch (\Throwable $th) {
            throw $th;
        }        
    }
}
