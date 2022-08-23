<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    // Relacion uno a muchos
    public function prodes(){
        return $this->hasMany('App\Models\Prode');
    }

    public function detalle_grupo(){
        return $this->hasMany('App\Models\DetalleProde');
    }

    public function tipo_usuario(){
        return $this->belongsTo('App\Models\TipoUsuario');
    }
}
