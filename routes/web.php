<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosController; //Hace referencia a el controlador de servicios
use App\Http\Controllers\EmpleadosController; //Hace referencia a el controlador de
use App\Http\Controllers\ClientesController; //Hace referencia a el controlador de
//use App\Http\Controllers\CitasController; //Hace referencia a el controlador de

// Ruta principal
Route::get('/', function () {
    return view('master'); // ->name('AstroCuts')
});


Route::resource('servicios', ServiciosController::class);

Route::resource('empleados', EmpleadosController::class);

//Route::resource('citas', CitasController::class);

Route::resource('clientes', ClientesController::class);

