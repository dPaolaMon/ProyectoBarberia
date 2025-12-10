<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    protected $table = 'servicios';

	protected $fillable = [
	'nombre',
	'descripcion',
	'duracion',
	'precio',
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
	
	// Buscar por precio mínimo
	public function scopePrecioMin($query, $min)
	{
		if (!empty($min)) {
			return $query->where('precio', '>=', $min);
		}
			return $query;
	}
	// Buscar por precio máximo
	public function scopePrecioMax($query, $max)
	{
		if (!empty($max)) {
			return $query->where('precio', '<=', $max);
		}
		return $query;
	}
	
}
