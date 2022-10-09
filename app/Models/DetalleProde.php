<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleProde extends Model
{
    use HasFactory;

    public function prode(){
        return $this->belongsTo('App\Models\Prode');
    }

    public function resultado(){
        return $this->belongsTo('App\Models\Resultado');
    }
}
