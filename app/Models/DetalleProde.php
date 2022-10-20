<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleProde extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function prode(){
        return $this->belongsTo(Prode::class, 'id_prode','id');
    }

    public function resultado(){
        return $this->belongsTo(Resultado::class, 'id_resultado','id');
    }
}
