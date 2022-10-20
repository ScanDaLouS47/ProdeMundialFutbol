<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\OlvidePassController;
use App\Http\Controllers\ProdeController;
use App\Models\Equipo;
use App\Models\Partido;
use App\Models\Prode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('registro', function () {
    return view('registro');
})->name('registro');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('prode', function () {
    $prodes = Prode::where('id_usuario','=', auth()->user()->id)->get();
    return view('prode', ['prodes' => $prodes]);
})->middleware('auth')->name('prode');

Route::get('fixture', function () {
    $partidos = Partido::paginate(5);
    // var_dump($partidos);    
    // $partidos = $partidos->equipo_2();
    // dd($partidos); 
    // foreach ($partidos as $partido) {
    //     $partido = $partido->equipo();
    // } 
    
    // $partidos->equipo = $partidos->equipo; 
    // dd($partidos->equipo);   
    // var_dump($partidos);
    return view('fixture', ['partidos' => $partidos]);
})->middleware('auth')->name('fixture');

Route::get('ranking', function () {
    $prodes = Prode::orderBy('puntaje', 'desc')->paginate(10);
    return view('ranking', ['prodes' => $prodes]);
})->middleware('auth')->name('ranking');

Route::get('perfil', function () {
    return view('perfil');
})->middleware('auth')->name('perfil');

Route::get('olvidepass', function () {
    return view('olvidepass');
})->name('olvidepass');

Route::get('admin', function () {
    return view('admin');
})->middleware('auth')->name('admin');

Route::get('resultados', function () {
    $hoy = date('Y-m-d');
    $partidos = Partido::where('fecha','>=', $hoy)->orderBy('fecha')->get();
    return view('resultados', ['partidos' => $partidos]);    
})->middleware('auth')->name('resultados');

Route::post('olvidepass', [OlvidePassController::class, 'olvidepass'])->name('olvidepass');

Route::get('usuarios', [UsuarioController::class, 'index'])->middleware('auth')->name('usuarios.index');

Route::post('usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');

Route::post('login', [LoginController::class, 'index'])->name('login.index');

Route::post('prode', [ProdeController::class, 'index'])->middleware('auth')->name('prode.index');


Route::get('logout', function () {
    Auth::logout();
    return view('login');
})->middleware('auth')->name('logout');

Route::get('*', function () {
    return view('not_found');
})->name('not_found');
