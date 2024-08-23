<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TreinadorModel;

class TreinadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $treinadores = TreinadorModel::all();
        return response()->json($treinadores);
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
            'cpf' => 'nullable|string',
            'rg' => 'nullable|string',
        ]);

        $treinador = TreinadorModel::create($validatedData);

        return response()->json($treinador, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $treinador = TreinadorModel::find($id);

        if (!$treinador) {
            return response()->json(['message' => 'Treinador not found'], 404);
        }

        return response()->json($treinador);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $treinador = TreinadorModel::find($id);

        if (!$treinador) {
            return response()->json(['message' => 'Treinador not found'], 404);
        }

        $validatedData = $request->validate([
            'nome' => 'required|string|max:225',
            'idade' => 'required|integer',
            'altura' => 'required|numeric',
            'peso' => 'required|numeric',
            'cpf' => 'nullable|string',
            'rg' => 'nullable|string',
        ]);

        $treinador->update($validatedData);
        return response()->json($treinador, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $treinador = TreinadorModel::find($id);

        if (!$treinador) {
            return response()->json(['message' => 'Treinador not found'], 404);
        }

        $treinador->delete();

        return response()->json(['message' => 'Treinador deleted successfully'], 200);
    }
}