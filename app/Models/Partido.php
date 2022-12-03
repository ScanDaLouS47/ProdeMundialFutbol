<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Equipo;
use App\Models\Resultado;

class Partido extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function equipo_1(){
        return $this->belongsTo(Equipo::class,'id_equipo_1','id');
    }

    public function equipo_2(){
        return $this->belongsTo(Equipo::class,'id_equipo_2','id');
    }

    // public function resultado(){
    //     return $this->hasOne(Resultado::class,'id_partido','id');
    // }
}
