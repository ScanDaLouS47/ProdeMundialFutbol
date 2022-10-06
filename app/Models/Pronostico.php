<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pronostico extends Model
{
    use HasFactory;

    public $timestamps = false;    

    public function prode(){
        return $this->belongsTo(Prode::class, 'id_prode','id');
        // return $this->belongsTo('App\Models\Prode');
    }
}
