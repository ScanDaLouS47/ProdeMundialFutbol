<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    use HasFactory;   

    public function detalle_prode(){
        return $this->hasMany('App\Models\DetalleProde');
    }

    public function equipo_ganador(){
        return $this->belongsTo('App\Models\Equipo');
    }

    public function partido(){
        return $this->belongsTo('App\Models\Partido');
    }
}
