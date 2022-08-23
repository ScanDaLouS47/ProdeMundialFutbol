<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    public function partido(){
        return $this->hasMany('App\Models\Partido');
    }

    public function detalle_grupo(){
        return $this->hasMany('App\Models\DetalleGrupo');
    }
}
