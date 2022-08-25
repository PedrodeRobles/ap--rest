<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarPacienteRequest;
use App\Http\Requests\GuardarPacienteRequest;
use App\Http\Resources\PacienteResource;
use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::all();

        return PacienteResource::collection($pacientes);
    }

    public function store(GuardarPacienteRequest $request)
    {
        // Paciente::create($request->all());

        // return response()->json([
        //     'res' => true,
        //     'msg' => "Paciente guardado correctamente",
        // ], 200);

        return (new PacienteResource(Paciente::create($request->all())))
            ->additional([
                'msg' => "Paciente guardado correctamente",
            ]);
    }
    
    public function show($id)
    {
        $paciente = Paciente::findOrFail($id);

        // return response()->json([
        //     'res' => true,
        //     'paciente' => $paciente
        // ], 200);

        return new PacienteResource($paciente);
    }

    public function update(ActualizarPacienteRequest $request, $id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->update($request->all());

        // return response()->json([
        //     'res' => true,
        //     'mensaje' => 'Paciente actualizado correctamente',
        // ], 200);
        return new PacienteResource($paciente);
    }

    public function destroy($id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->delete();

        // return response()->json([
        //     'res' => true,
        //     'mensaje' => 'Paciente eliminado correctamente'
        // ], 200);
        return new PacienteResource($paciente);
    }
}
