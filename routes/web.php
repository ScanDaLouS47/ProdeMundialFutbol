<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\OlvidePassController;
use App\Http\Controllers\ProdeController;
use App\Models\Equipo;
use App\Models\Partido;
use App\Models\Prode;
use App\Models\Resultado;
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
    $partidos = Partido::orderBy('id')->get();
    return view('prode', ['prodes' => $prodes, 'partidos' => $partidos]);
})->middleware('auth')->name('prode');

Route::get('fixture', function () {
    $partidos = Partido::orderBy('fecha', 'asc')->orderBy('hora','asc')->paginate(5);
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
    $prodes = Prode::orderBy('puntaje', 'desc')->get();
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
})->middleware('auth', 'admin')->name('admin');

Route::get('resultados', function () {    
    $partidos = Partido::where('estado',1)->orderBy('fecha')->orderBy('hora')->get();
    $resultados = Resultado::orderBy('id')->get();
    return view('resultados', ['partidos' => $partidos, 'resultados' => $resultados]);    
})->middleware('auth','admin')->name('resultados');

Route::post('resultado', [ProdeController::class, 'cargaresultado'])->middleware('auth')->name('resultado');

Route::post('olvidepass', [OlvidePassController::class, 'olvidepass'])->name('olvidepass');

Route::get('usuarios', [UsuarioController::class, 'index'])->middleware('auth','admin')->name('usuarios.index');

Route::post('usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');

Route::post('login', [LoginController::class, 'index'])->name('login.index');

Route::post('prode', [ProdeController::class, 'index'])->middleware('auth')->name('prode.index');

Route::get('modprode/{id}', [ProdeController::class, 'modify'])->middleware('auth');

Route::post('modpronostico', [ProdeController::class, 'cambiar'])->middleware('auth')->name('modpronostico');

Route::get('modusuario/{id}', [UsuarioController::class, 'modify'])->middleware('auth');

Route::get('aprobarestado/{id}', [ProdeController::class, 'aprobar'])->middleware('auth');


Route::get('logout', function () {
    Auth::logout();
    return view('login');
})->middleware('auth')->name('logout');

Route::get('*', function () {
    return view('not_found');
})->name('not_found');
