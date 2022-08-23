<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleGrupo extends Model
{
    use HasFactory;

    public function equipo_1(){
        return $this->belongsTo('App\Models\Equipo');
    }

    public function equipo_2(){
        return $this->belongsTo('App\Models\Equipo');
    }

    public function usuario(){
        return $this->belongsTo('App\Models\Usuario');
    }

    public function grupo(){
        return $this->belongsTo('App\Models\Grupo');
    }
}
