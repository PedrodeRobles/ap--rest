<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarPacienteRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre'      => 'required',
            'apellido'    => 'required',
            'edad'        => 'required',
            'sexo'        => 'required',
            'dni'         => 'required|unique:pacientes,dni',
            'tipo_sangre' => 'required',
            'telefono'    => 'required',
            'correo'      => 'required',
            'direccion'   => 'required',
        ];
    }
}
