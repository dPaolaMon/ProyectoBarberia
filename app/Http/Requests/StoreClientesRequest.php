<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // Clientes: Identidad
			'nombre' => 'required|string|max:100',
			'apellido' => 'required|string|max:100', 
			'fecha_nac' => 'required|date|before_or_equal:today', 
			'telefono' => 'required|numeric|digits:10'
			// SE ELIMINA PARA QUE SE ALMACENE EN LA TABLA USERS'correo' => 'required|email|max:100'
			//'total_visitas' => 'required|numeric' (No se tomará en cuenta)
        ];
    }

    // REGLAS SE VALIDACION
}
