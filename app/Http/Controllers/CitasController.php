<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleados;
use App\Models\Clientes;
use App\Models\Servicios;
use App\Models\Citas;

use App\Http\Requests\StoreCitasRequest;

class CitasController extends Controller
{
	/**
     * Display a listing of the resource.
     */
    public function index()
    {
        // TODO: AJUSTAR A CITAS
        //$citas = Citas::all();
        $citas = Citas::with(['servicio', 'empleado', 'cliente'])->get();
        /*$clientes = Clientes::query() 
			->Nombre(request('nombre'))
			->NumeroVisitas(request('total_visitas'))
			->BuscarPorTelefono(request('telefono'))
			->get(); */
		return view('citas.index', compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $empleados = Empleados::all();
		$clientes = Clientes::all();
		$servicios = Servicios::all();
        return view('citas.create', compact('empleados', 'clientes', 'servicios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCitasRequest $request)
    {
        //
        Citas::create($request->validated());
		return redirect()->route('citas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $citas = Citas::findOrFail($id);
		return view('citas.show', compact('citas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $empleados = Empleados::all();
		$clientes = Clientes::all();
		$servicios = Servicios::all();
        $citas = Citas::findOrFail($id);
		return view('citas.edit', compact('citas', 'empleados', 'clientes', 'servicios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCitasRequest $request, string $id)
    {
        //
        $citas = Citas::findOrFail($id);
		$citas->update($request->validated());
		return redirect()->route('citas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Citas::destroy($id);
		return redirect()->route('citas.index');
    }

    // En App\Http\Controllers\CitasController.php (o un método similar)


public function completarCita(Cita $cita) 
{
    // --- Lógica de la Cita CHECALOOOOOOO ---
    
    // 1. Verificar si la cita ya estaba completada para evitar doble conteo
    if ($cita->estado === 'completada') {
        return redirect()->back()->with('error', 'La cita ya estaba marcada como completada.');
    }
    
    // 2. Marcar la Cita como completada en la base de datos
    $cita->update(['estado' => 'completada']);

    // --- Lógica del Cliente (Incremento) ---
    
    // 3. Acceder al Cliente relacionado (asumiendo la relación 'cliente()' en el modelo Cita)
    $cliente = $cita->cliente; 
    
    if ($cliente) {
        // 4. INCREMENTO CLAVE: Aumentar el contador de visitas en 1
        $cliente->increment('total_visitas');

        // 5. Actualizar la fecha de la última visita (para lógica de promociones)
        $cliente->update([
            'ultima_visita' => now()->toDateString(), 
        ]);
        
        // Opcional: Ejecutar lógica de promoción aquí si $cliente->total_visitas % 5 == 0
    }

    return redirect()->back()->with('success', '✅ Cita finalizada y contador de visitas actualizado.');
}

}
