<?php

use App\Http\Controllers\API\PacienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('pacientes', [PacienteController::class, 'index']);
Route::post('pacientes', [PacienteController::class, 'store']);
Route::get('pacientes/{id}' ,[PacienteController::class, 'show']);
Route::put('pacientes/{id}', [PacienteController::class, 'update']);
Route::delete('pacientes/{id}', [PacienteController::class, 'destroy']);