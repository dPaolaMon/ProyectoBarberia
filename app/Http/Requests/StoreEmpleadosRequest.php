<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmpleadosRequest extends FormRequest
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
			// Empleados: Identidad
			'nombre' => 'required|string|max:100',
			'apellido' => 'required|string|max:100',
			'edad' => 'required|integer|min:18|max:90', 
			'fecha_nac' => 'required|date|before_or_equal:today', // Debe ser una fecha válida y no futura.
			'telefono' => 'required|numeric|digits:10', // 10 dígitos .
			// Empleados: Dirección
			'calle' => 'required|string|max:100',
			'mz' => 'required|integer|min:1', // min 1 para números enteros y positivos.
			'lt' => 'required|integer|min:1', 
			'municipio' => 'required|string|max:100',
			'estado' => 'required|string|max:100',
			'cp' => 'required|string|size:5'
        ];
    }

    /* public function messages(): array
	{
    return [
        // Errores Generales (Simples)
        'nombre.required' => 'El nombre del empleado es obligatorio.',
        'apellido.required' => 'El apellido del empleado es obligatorio.',
        'calle.required' => 'La calle de residencia es obligatoria.',
        'municipio.required' => 'El municipio es obligatorio.',
        'estado.required' => 'El estado es obligatorio.',

        // Errores de Precisión y Tipo (Los más críticos)

        // 1. Teléfono
        'telefono.required' => 'El número de teléfono es obligatorio.',
        'telefono.numeric' => 'El teléfono solo debe contener dígitos.',
        'telefono.digits' => 'El teléfono debe tener exactamente 10 dígitos.',

        // 2. Edad y Fecha de Nacimiento
        'edad.required' => 'La edad es obligatoria.',
        'edad.integer' => 'La edad debe ser un número entero.',
        'edad.min' => 'El empleado debe ser mayor de 18 años.',
        'edad.max' => 'La edad máxima permitida es de 90 años.',
        
        'fecha_nac.required' => 'La fecha de nacimiento es obligatoria.',
        'fecha_nac.date' => 'La fecha de nacimiento no tiene un formato de fecha válido.',
        'fecha_nac.before_or_equal' => 'La fecha de nacimiento no puede ser una fecha futura.',

        // 3. Dirección y CP (Códigos Postales y Manzanas/Lotes)
        'cp.required' => 'El código postal es obligatorio.',
        'cp.string' => 'El código postal debe ser una cadena de texto.',
        'cp.size' => 'El código postal debe tener exactamente 5 dígitos.',

        'mz.required' => 'La manzana es obligatoria.',
        'mz.integer' => 'La manzana debe ser un número entero.',
        'lt.required' => 'El lote es obligatorio.',
        'lt.integer' => 'El lote debe ser un número entero.',
    ];
    
	} */
}
