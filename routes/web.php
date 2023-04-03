<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('encabezado', function () {
    return view('template/encabezado');
});

Route::get('contenido', function () {
    return view('template/contenido');
});

Route::get('menu', function () {
    return view('template/menu');
});
Route::get('pie', function () {
    return view('template/pie');
});

Route::get('master', function () {
    return view('template/master');
});


Route::get('bienvenida', function () {
    return view('bienvenida');
});