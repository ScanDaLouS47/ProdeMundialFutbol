<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\OlvidePassController;
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
    return view('prode');
})->name('prode');

Route::get('fixture', function () {
    return view('fixture');
})->name('fixture');

Route::get('ranking', function () {
    return view('ranking');
})->name('ranking');

Route::get('perfil', function () {
    return view('perfil');
})->name('perfil');

Route::get('olvidepass', function () {
    return view('olvidepass');
})->name('olvidepass');

Route::post('olvidepass', [OlvidePassController::class, 'olvidepass'])->name('olvidepass');

Route::get('usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');

Route::post('usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');

Route::post('login', [LoginController::class, 'index'])->name('login.index');


Route::get('*', function () {
    return view('not_found');
})->name('not_found');