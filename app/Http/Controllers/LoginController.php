<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\OlvidePass;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $req){        
        // $usuarios = Usuario::orderBy('id', 'desc')->paginate();
        // return view('usuarios', compact('usuarios'));

        try {
            $usuarioregistrado = Usuario::where('dni', $req->dni)->first();
            if($usuarioregistrado){
                // return redirect('https://www.google.com');
                $olvidepass = OlvidePass::where('id_usuario','=', $usuarioregistrado->dni);                
                if($olvidepass){                    
                    if($olvidepass->codigo == $req->password){
                        $usuarioregistrado->update(['password' => md5($olvidepass->password)]);
                        $olvidepass->update(['estado' => 0]);
                        return redirect()->route('home');
                    }else{
                        $message = 'El codigo temporal de acceso no es correcto';
                        return redirect()->route('login')->with('message', $message);
                    }
                }else{
                    $usuario = Usuario::where('dni', $req->dni)->where('password', md5($req->password))->first(); 
                    if($usuario){
                        return redirect()->route('home');  
                    }else{
                        $message = 'El dni o contraseña no son correctos';
                        return redirect()->route('login')->with('message', $message);
                    }
                }

            }else{
                $message = 'No existe usuario registrado con ese dni';
                return redirect()->route('login')->with('message', $message);
            }                                        
        } catch (\Throwable $th) {
            throw $th;
        }        
    }    
}
