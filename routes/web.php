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

//ruta recursiva


Route::get('/uno', function () {
    return view('layouts.base');
});

Route::get('/administrador', function () {
    return view('administrador.administrador');
});

Route::resource('/productos', 'PedidoController');


Route::resource('/trabajo', 'TrabajoController');



// proyectos rutas

//Route::get('/inicio', function () {
 //   return view('proyecto.inicio');
//});

Route::resource('/admi', 'ProyectoController');

Route::view('/inicio', 'proyecto.inicio')->name('inicio');




Route::view('/contacto', 'proyecto.contacto')->name('contacto');


Route::view('/servicios', 'proyecto.servicios')->name('servicios');




Route::resource('/parcialnoche', 'ParcialnocheController');


Route::resource('/tienda', 'TiendaController');

Route::view('/login', 'tienda.login')->name('login');

Route::view('/prueba', 'tienda.prueba')->name('prueba');

//////
/////
Route::resource('/eloquent', 'EloquentController');




Route::resource('/admini', 'AdmiController');



/////


Route::resource('/practica', 'PracticaController');
 


// farmacia

Route::get('/home', function () {
    return view('farmacia.inicio');
});

