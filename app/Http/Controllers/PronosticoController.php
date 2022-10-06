<?php

namespace App\Http\Controllers;

use App\Models\Pronostico;
use Illuminate\Http\Request;

class PronosticoController extends Controller
{
    public function showAll(){        
        // $pronosticos = Pronostico::orderBy('id', 'desc');
        // return view('misprodes', compact('pronosticos'));
    }
}
