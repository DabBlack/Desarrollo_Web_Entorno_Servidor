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
    return view('welcome');
});

Route::get('contacto/{nom?}/{ed?}', function ($nombre="David",$edad=20) {
    return view('contactos.contacto')->with('nombre',$nombre)->with('edad',$edad);
    //return view('contacto',array('nombre'=>$nombre,'edad'=>$edad));
})->where([
    'nom'=>'[A-Za-z]+',
    'ed'=>'[0-9]+'])
  ->name('contacto');

Route::get('datos', function() {
    return view('datos');
});

Route::get('alerta', function() {
    return view('vista_alerta');
});
