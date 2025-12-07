<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    //
    protected $table = 'clientes';

	protected $fillable = [
	'nombre',
	'apellido',
	'fecha_nac',
	'telefono',
	//'correo',
	'total_visitas'
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
	
    // Buscar por visitas
	public function scopeNumeroVisitas($query, $minimo_visitas)
	{
		if (!empty($minimo_visitas) && is_numeric($minimo_visitas)) {
				return $query->where('total_visitas', '>=', $minimo_visitas);		   
		}
		return $query;
	}

	// Buscar por coincidencia parcial de telefono
	public function scopeBuscarPorTelefono($query, $telefono)
	{
		if (!empty($telefono)) {
			return $query->where('telefono', 'LIKE', "%$telefono%");
		}
		return $query;
	}
}
