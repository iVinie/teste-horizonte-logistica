<?php

namespace App\Http\Controllers;

use App\Models\Frota;
use Illuminate\Http\Request;

class FrotasController extends Controller
{
    public $frota;

    public function __construct()
    {
        $this->frota = new Frota();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $frotas = $this->frota->all();
        return view('frotas', ['frotas' => $frotas]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frota_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'modelo' => 'required',
            'marca' => 'required',
            'placa' => 'required',
            'ano' => 'required',
            'ativo' => 'required',
        ]);

        $create = $this->frota->create($request->all());

        return redirect()->route('frotas.index')->with('success', 'Frota criada com sucesso.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Frota $frota)
    {
        return view('edit', compact('frota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = $this->frota->where('id', $id)->update($request->except(['_token', '_method']));
        return redirect()->route('frotas.index')->with('success', 'Frota atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $frota = Frota::find($id);
    
        if (!$frota) {
            return redirect()->route('frotas.index')->with('error', 'Registro não encontrado.');
        }
    
        $frota->delete();
    
        return redirect()->route('frotas.index')->with('success', 'Registro excluído com sucesso.');
    }
}
