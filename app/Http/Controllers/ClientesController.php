<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;

use App\Http\Requests\StoreClientesRequest;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Se comenta la linea 18 para permitir la busqueda
        //$clientes = Clientes::all();
        $clientes = Clientes::query() 
			->Nombre(request('nombre'))
			->NumeroVisitas(request('total_visitas'))
			->BuscarPorTelefono(request('telefono'))
			->get(); 
		return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientesRequest $request)
    {
        //
        Clientes::create($request->validated());
		return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $clientes = Clientes::findOrFail($id);
		return view('clientes.show', compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $clientes = Clientes::findOrFail($id);
		return view('clientes.edit', compact('clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreClientesRequest $request, string $id)
    {
        //
        $clientes = Clientes::findOrFail($id);
		$clientes->update($request->validated());
		return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Clientes::destroy($id);
		return redirect()->route('clientes.index');
    }
}
