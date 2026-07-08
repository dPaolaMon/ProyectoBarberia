<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    //
    protected $table = 'empleados';

	protected $fillable = [
	'id',
    'nombre',
    'apellido',
    'edad',
    'fecha_nac',
    'telefono',
    'calle',
    'mz',
    'lt',
    'municipio',
    'estado',
    'cp',
    'user_id',
    'created_at',
    'updated_at',
	];

	/* -----------------------
		SCOPES DE BÚSQUEDA
	----------------------- */

	// Buscar por coincidencia parcial en el nombre
	public function scopeNombre($query, $nombre)
	{
		if (!empty($nombre)) {
			return $query->where('nombre', 'LIKE', "%$nombre%");
		}
		return $query;
	}
	
	// Buscar por mes de nacimiento
	public function scopeNacidosEnMes($query, $mes)
	{
    // Mes válido (1 a 12).
		if (is_numeric($mes) && $mes >= 1 && $mes <= 12) {
				return $query->whereMonth('fecha_nac', $mes);		   
		}
		return $query;
	}

	// Buscar por coincidencia parcial por telefono
	public function scopeBuscarPorTelefono($query, $telefono)
	{
		if (!empty($telefono)) {
			return $query->where('telefono', 'LIKE', "%$telefono%");
		}
		return $query;
	}
	
}
