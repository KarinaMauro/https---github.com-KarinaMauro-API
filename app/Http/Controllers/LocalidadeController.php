<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LocalidadeModel; // Adicionado para importar o modelo correto

class LocalidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $localidades = LocalidadeModel::all(); // Corrigido para usar a variável correta
        return response()->json($localidades); // Corrigido para usar a variável correta
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Método não utilizado, pode ser removido se não necessário
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'rua' => 'required|string|max:225',
            'bairro' => 'required|string|max:225',
            'numero' => 'required|numeric', // Corrigido para evitar uso de acento no nome da chave
            'cep' => 'required|string|max:225',
            'cidade' => 'required|string|max:225',
            'estado' => 'required|string|max:225',
            'pais' => 'required|string|max:225', // Corrigido para evitar uso de acento no nome da chave
        ]);

        $localidade = LocalidadeModel::create($validatedData);

        return response()->json($localidade, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $localidade = LocalidadeModel::find($id);

        if (!$localidade) {
            return response()->json(['message' => 'Localidade not found'], 404);
        }

        return response()->json($localidade);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Método não utilizado, pode ser removido se não necessário
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $localidade = LocalidadeModel::find($id);

        if (!$localidade) {
            return response()->json(['message' => 'Localidade not found'], 404);
        }

        $validatedData = $request->validate([
            'rua' => 'required|string|max:225',
            'bairro' => 'required|string|max:225',
            'numero' => 'required|numeric', // Corrigido para evitar uso de acento no nome da chave
            'cep' => 'required|string|max:225',
            'cidade' => 'required|string|max:225',
            'estado' => 'required|string|max:225',
            'pais' => 'required|string|max:225', // Corrigido para evitar uso de acento no nome da chave
        ]);

        $localidade->update($validatedData);
        return response()->json($localidade, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $localidade = LocalidadeModel::find($id);

        if (!$localidade) {
            return response()->json(['message' => 'Localidade not found'], 404);
        }

        $localidade->delete();
        return response()->json(['message' => 'Localidade deleted successfully'], 200);
    }
}