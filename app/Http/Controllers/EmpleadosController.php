<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleados;

use App\Http\Requests\StoreEmpleadosRequest;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Se comenta la linea 18 para permitir la busqueda
        //$empleados = Empleados::all();
        $empleados = Empleados::query() 
			->Nombre(request('nombre'))
			->nacidosEnMes(request('mes_nacimiento'))
			->buscarPorTelefono(request('telefono'))
			->get();
        
		return view('empleados.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmpleadosRequest $request)
    {
        //
        Empleados::create($request->validated());
		return redirect()->route('empleados.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $empleados = Empleados::findOrFail($id);
		return view('empleados.show', compact('empleados'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $empleados = Empleados::findOrFail($id);
		return view('empleados.edit', compact('empleados'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreEmpleadosRequest $request, string $id)
    {
        //
        $empleados = Empleados::findOrFail($id);
		$empleados->update($request->validated());
		return redirect()->route('empleados.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Empleados::destroy($id);
		return redirect()->route('empleados.index');
    }
}
