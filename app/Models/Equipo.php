<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Partido;

class Equipo extends Model
{
    use HasFactory;

    public function partidos_local(){
        return $this->hasMany(Partido::class, 'id_equipo_1','id');
    }

    public function partidos_visitante(){
        return $this->hasMany(Partido::class, 'id_equipo_2','id');
    }

    // public function detalle_grupo(){
    //     return $this->hasMany('App\Models\DetalleGrupo');
    // }
}
