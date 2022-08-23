<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prode extends Model
{
    use HasFactory;

    public function detalle_prode(){
        return $this->hasMany('App\Models\DetalleProde');
    }

    public function usuario(){
        return $this->belongsTo('App\Models\Usuario');
    }
}
