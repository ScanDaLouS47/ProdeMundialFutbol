<?php

namespace App\Http\Controllers;

// use App\Models\Usuario;
use App\Models\User;
use App\Models\OlvidePass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $req){        
        // $usuarios = Usuario::orderBy('id', 'desc')->paginate();
        // return view('usuarios', compact('usuarios'));

        try {
            $usuarioregistrado = User::where('dni', $req->dni)->first();            
            if($usuarioregistrado){                
                $olvidepass = OlvidePass::where([['id_usuario','=', $usuarioregistrado->id],['estado','=', 1]])->first();                               
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
                    $usuario = User::where('dni', $req->dni)->where('password', md5($req->password))->first(); 
                    if($usuario){  
                        Auth::login($usuario);
                        if($usuario->id === 1){
                            return redirect()->route('admin');
                        }else{
                            return redirect()->route('prode');  
                        }
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
