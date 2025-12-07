<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CitasController;// Importar controlador de citas

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('master');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');    
});

Route::get('/citas', function () {
        return view('citas.index'); // Vista principal de Citas
    })->name('citas.index');

Route::middleware(['auth'])->group(function () {
    Route::resource('citas', CitasController::class); //Define las todas las rutas (TODO:AJUSTAR)
});


require __DIR__.'/auth.php';
