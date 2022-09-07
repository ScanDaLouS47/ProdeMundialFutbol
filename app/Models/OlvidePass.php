<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OlvidePass extends Model
{
    use HasFactory;

    protected $table = "olvidepass";

    public function usuario(){
        return $this->belongsTo('App\Models\Usuario');
    }
}
