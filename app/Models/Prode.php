<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prode extends Model
{
    use HasFactory;

    public $timestamps = false;
        
    public function detalle_prode(){
        return $this->hasMany(DetalleProde::class, 'id_prode','id');
        // return $this->hasMany('App\Models\DetalleProde');
    }

    public function pronostico(){
        return $this->hasMany(Pronostico::class, 'id_prode','id');
        // return $this->hasMany('App\Models\Pronostico');
    }

    public function usuario(){
        return $this->belongsTo(User::class, 'id_usuario','id');
        // return $this->belongsTo('App\Models\Usuario');
    }
}
