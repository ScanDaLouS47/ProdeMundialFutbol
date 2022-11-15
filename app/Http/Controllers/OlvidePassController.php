<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Usuario;
use App\Models\OlvidePass;
use Illuminate\Http\Request;

class OlvidePassController extends Controller
{
    public function index(Request $req){        
        $dni = $req->dni;
        $nuevaPass = $req->nuevaPass;
        $nuevaPass2 = $req->nuevaPass2;

        // TODO
        // 1-Revisar que el pass se repita correctamente
        // 2-Validar que el dni pertenezca a un usuario registrado
        // 2-Si existe tomar telefono registrado
        // 3-Crear un codigo random en la base de datos con el dni como dato id
        // 4-Enviar ese codigo por whatsapp
        // 5-Luego se deberia validar que ese codigo no este pasando como pass en el login y si pasa con este codigo enviarlo a otra ruta para que cambie la pass

        // Agregar icono para ver las pass
    }

    public function olvidepass(Request $req){
        try {
            $usuario = User::where('dni',$req->dni)->first();
            if($usuario){     

                $usuario->password = md5($req->nuevaPass);

                $usuario->save();

                $message = 'Su password ha sido cambiado correctamente.';
                return redirect()->route('olvidepass')->with('message',$message);
                // $codigo = rand(0, 9999);    
                
                // $olvidepass = new OlvidePass();

                // $olvidepass->codigo = $codigo;
                // $olvidepass->id_usuario = $usuario->id;
                // $olvidepass->password = $req->nuevaPass;
                // $olvidepass->estado = 1;

                // $olvidepass->save();      
                
                // $telefono = $usuario->telefono;

                // $texto = 'Su contraseña temporal es: '.$codigo;
                // return redirect('https://api.whatsapp.com/send?phone=549'.$telefono.'&text='.$texto);
            }else{
                $message = 'No existe ningun usuario registrado con ese dni';
                return redirect()->route('olvidepass')->with('message',$message);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
