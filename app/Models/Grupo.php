<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    public function detalle_grupo(){
        return $this->hasMany('App\Models\DetalleGrupo');
    }
}
