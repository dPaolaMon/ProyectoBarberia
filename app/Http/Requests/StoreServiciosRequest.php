<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiciosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
		//se cambio a true para efectos de desarrollo
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
            //Servicios
            'nombre'=>'required|string|max:100',
            'descripcion'=>'required|string', //Verificar que la descripcion es requerida
            'duracion'=>'required|string',
            'precio'=>'required|numeric|min:0.01'
        ];
    }

    //Funcion mensajes de error
    public function messages(): array
	{
		return [
		'nombre.required' => 'El nombre es obligatorio.',
		'precio.required' => 'El precio es obligatorio.',
		'precio.min' => 'El precio debe ser mayor que 0.',
		'descripcion.required' => 'La descripción es obligatoria.',
		];
	}
	
}
