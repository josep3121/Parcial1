<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\informacion;
use App\http\controllers\catalogos;
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


Route::get('/', [informacion::class,'ver']);

Route::get('Contactos',  [informacion::class,'info']);

Route::get('CatalogoPerros',  [catalogos::class,'perros']);

Route::get('CatalogoGatos',  [catalogos::class,'gatos']);

Route::get('servicios/habitaciones', function () {
    return view('servicios.habitaciones');
});

Route::get('servicios/eventos/{id}', function ($id) {
  return view('servicios.eventos',array('id'=>$id));
});

Route::get('reservas', function () {
 return view('reservas.reservas');
});

Route::get('contactos', function () {
    return  view('contacto');
});