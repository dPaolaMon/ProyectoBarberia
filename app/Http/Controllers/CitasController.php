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

}
