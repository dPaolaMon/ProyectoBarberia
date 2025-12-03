<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCitasRequest extends FormRequest
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
			// ÍNDICES DE RELACIÓN (Integridad Referencial)
			'empleado_id' => 'required|integer|exists:empleados,id',
			'cliente_id' => 'required|integer|exists:clientes,id',
			'servicio_id' => 'required|integer|exists:servicios,id',
			
			// DATOS DE TIEMPO Y COHERENCIA
			'fecha' => 'required|date|after_or_equal:today', // La cita no puede ser en el pasado.
			'hora_inicio' => 'required',
			'hora_fin' => 'nullable|date_format:H:i|after:hora_inicio', // La hora de fin debe ser después de la hora de inicio.
			
			// ESTADO DE LA CITA
			'estado' => 'nullable|string|in:pendiente,completada,cancelada',
		];
	}
	//REGLAS DE VALIDACION
}
