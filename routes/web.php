<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CitasController;// Importar controlador de citas
use App\Http\Controllers\ClientesController;// Importar controlador de clientes
use App\Http\Controllers\EmpleadosController;// Importar controlador de empleados
use App\Http\Controllers\ServiciosController;// Importar controlador de servicios

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('master');
});

Route::get('/master-user', function () {
    return view('master-user');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');    
});

/*---------*
 * 	Citas  *
 * --------*/
Route::get('/citas', function () {
        return view('citas.index'); // Vista principal de Citas
    })->name('citas.index');

Route::middleware(['auth'])->group(function () {
    Route::resource('citas', CitasController::class); //Define las todas las rutas (TODO:AJUSTAR)
});

/*------------*
 * 	Clientes  *
 * -----------*/
Route::get('/clientes', function () {
        return view('clientes.index'); // Vista principal de Clientes
    })->name('clientes.index');

Route::middleware(['auth'])->group(function () {
    Route::resource('clientes', ClientesController::class); //Define las todas las rutas (TODO:AJUSTAR)
});

/*-------------*
 * 	Empleados  *
 * ------------*/
Route::get('/empleados', function () {
        return view('empleados.index'); // Vista principal de Empleados
    })->name('empleados.index');

Route::middleware(['auth'])->group(function () {
    //Define las todas las rutas: Route::resource('empleados', EmpleadosController::class);  (TODO:AJUSTAR)
    
    // 1. VER LISTA (INDEX) - Solo requiere autenticación
    Route::get('/empleados', [EmpleadosController::class, 'index'])->name('empleados.index');

    /* ----- GESTIÓN DE EMPLEADOS (Solo 'gestionar-empleados') ----- */

    // 2. MOSTRAR FORMULARIO DE CREACIÓN (CREATE)
    Route::get('/empleados/create', function () {
        // Ejecuta el Gate, si falla, detiene la ejecución con un 403
        Gate::authorize('gestionar-empleados'); 
        return view('empleados.create');
    })->name('empleados.create');

    // 3. PROCESAR EL FORMULARIO (STORE) - Usa el método del controlador para la lógica
    Route::post('/empleados', [EmpleadosController::class, 'store'])
        // Aplicar el Gate a un controlador es usando el middleware 'can'
        ->middleware('can:gestionar-empleados') 
        ->name('empleados.store');

    // 4. RUTAS DE EDICIÓN Y ELIMINACIÓN
    Route::get('/empleados/{empleado}/edit', function (Empleado $empleado) {
        Gate::authorize('gestionar-empleados');
        return view('empleados.edit', compact('empleado'));
    })->name('empleados.edit');

	// 5. PROCESAR LA ACTUALIZACIÓN (UPDATE)
	Route::put('/empleados/{empleado}', function (Empleado $empleado) {
		Gate::authorize('gestionar-empleados');
		// Ejecutar la lógica de actualización en el controlador
		return app(EmpleadosController::class)->update(request(), $empleado);
	})->name('empleados.update');

	// 6. ELIMINACIÓN (DESTROY)
	Route::delete('/empleados/{empleado}', function (Empleado $empleado) {
		Gate::authorize('gestionar-empleados');
		return app(EmpleadosController::class)->destroy($empleado);
	})->name('empleados.destroy');
});

/*-------------*
 * 	Servicios  *
 * ------------*/
Route::get('/servicios', function () {
        return view('servicios.index'); // Vista principal de Servicios
    })->name('servicios.index');

Route::middleware(['auth'])->group(function () {
    Route::resource('servicios', ServiciosController::class); //Define las todas las rutas (TODO:AJUSTAR)
});


require __DIR__.'/auth.php';

