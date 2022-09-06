<?php

namespace App\Http\Controllers;

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
}
