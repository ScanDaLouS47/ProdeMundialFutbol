<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadio extends Model
{
    use HasFactory;

    public function detalles_grupos(){
        return $this->hasMany('App\Models\DetalleProde');
    }

    public function partido(){
        return $this->hasMany('App\Models\Partido');
    }
}
