<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class PacienteResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'          => $this->id,
            'nombre'      => Str::of($this->nombre)->upper(),
            'apellido'    => Str::of($this->apellido)->upper(),
            'edad'        => $this->edad,
            'sexo'        => $this->sexo,
            'dni'         => $this->dni,
            'tipo_sangre' => $this->tipo_sangre,
            'telefono'    => $this->telefono,
            'correo'      => $this->correo,
            'direccion'   => $this->direccion,
            'created_at'  => $this->created_at->format('d-m-Y'),
            'updated_at'  => $this->updated_at->format('d-m-Y')
        ];
    }

    public function with($request)
    {
        return [
            'res' => true
        ];
    }
}
