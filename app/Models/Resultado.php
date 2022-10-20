<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    use HasFactory;   

    public $timestamps = false;

    public function detalle_prode(){
        return $this->hasMany(DetalleProde::class, 'id_resultado','id');
    }

    // public function equipo_ganador(){
    //     return $this->belongsTo(Equipo::class, 'id_usuario','id');
    // }

    public function partido(){
        return $this->belongsTo(Partido::class, 'id_partido','id');
    }
}
