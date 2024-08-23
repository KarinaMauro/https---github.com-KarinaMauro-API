<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompetidorModel; // Adicionado para garantir que o modelo seja importado

class CompetidorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $competidores = CompetidorModel::all(); // Corrigido para usar a variável correta
        return response()->json($competidores); // Corrigido para usar a variável correta
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
            'nome' => 'required|string|max:225',
            'idade' => 'required|integer',
            'altura' => 'required|numeric',
            'peso' => 'required|numeric',
            'sexo' => 'required|string|max:225',
            'cpf' => 'nullable|string',
            'rg' => 'nullable|string',
            'equipe' => 'required|string|max:225',
        ]);

        $competidor = CompetidorModel::create($validatedData); // Corrigido para usar a variável correta

        return response()->json($competidor, 201); // Corrigido para usar a variável correta
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $competidor = CompetidorModel::find($id);

        if (!$competidor) {
            return response()->json(['message' => 'Competidor not found'], 404);
        }

        return response()->json($competidor);
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
        $competidor = CompetidorModel::find($id);

        if (!$competidor) {
            return response()->json(['message' => 'Competidor not found'], 404);
        }

        $validatedData = $request->validate([
            'nome' => 'required|string|max:225',
            'idade' => 'required|integer',
            'altura' => 'required|numeric',
            'peso' => 'required|numeric',
            'sexo' => 'required|string|max:225',
            'cpf' => 'nullable|string',
            'rg' => 'nullable|string',
            'equipe' => 'required|string|max:225',
        ]);

        $competidor->update($validatedData);
        return response()->json($competidor, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $competidor = CompetidorModel::find($id);

        if (!$competidor) {
            return response()->json(['message' => 'Competidor not found'], 404);
        }

        $competidor->delete();

        return response()->json(['message' => 'Competidor deleted successfully'], 200);
    }
}