<?php

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
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/entrar', function () {
    return view('entrar');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/prode', function () {
    return view('prode');
});

Route::get('/fixture', function () {
    return view('fixture');
});

Route::get('/ranking', function () {
    return view('ranking');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('*', function () {
    return view('not_found');
});