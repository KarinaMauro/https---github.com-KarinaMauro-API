<?php
use App\Http\Controllers\SportController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/meu-dados', function () {
    return response()->json([
        'nome_completo' => 'Karina Da Silva Mauro',
        'rm' => '138003137',
    ]);
});

route::apiResource('/sports' , SportController::class);

