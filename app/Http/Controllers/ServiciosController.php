<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use Illuminate\Http\Request;

use App\Http\Requests\StoreServiciosRequest;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Se comenta la linea 18 para permitir la busqueda
        // $servicios = Servicios::all();
        $servicios = Servicios::query()
			->Nombre(request('nombre'))
			->PrecioMin(request('min'))
			->PrecioMax(request('max'))
			->get();
        
		return view('servicios.index', compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiciosRequest $request)
    {
        //
        Servicios::create($request->validated());
		return redirect()->route('servicios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $servicios = Servicios::findOrFail($id);
		return view('servicios.show', compact('servicios'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $servicios = Servicios::findOrFail($id);
		return view('servicios.edit', compact('servicios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreServiciosRequest $request, string $id)
    {
        //
        $servicios = Servicios::findOrFail($id);
		$servicios->update($request->validated());
		return redirect()->route('servicios.index');
	}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Servicios::destroy($id);
		return redirect()->route('servicios.index');
    }
}
