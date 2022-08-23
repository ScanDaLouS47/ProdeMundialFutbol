<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;

    public function equipo_1(){
        return $this->belongsTo('App\Models\Equipo');
    }

    public function equipo_2(){
        return $this->belongsTo('App\Models\Equipo');
    }

    public function resultado(){
        return $this->hasMany('App\Models\Resultado');
    }
}
