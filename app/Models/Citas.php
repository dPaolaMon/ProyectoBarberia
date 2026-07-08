<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    // Las columnas que pueden ser llenadas de forma masiva (Mass Assignment)
    protected $fillable = [
        'empleado_id',    // Clave foránea 
        'cliente_id',     // Clave foránea
        'servicio_id',    // Clave foránea
        'fecha', 
        'hora_inicio',
        //'hora_fin',
        'estado',         // Por defecto: 'pendiente'
    ];
    
	public function servicio()
	{
		// Debe usar belongsTo ya que servicio_id es la clave foránea en la tabla 'citas'
		return $this->belongsTo(Servicios::class);
	}

	public function empleado()
	{
		return $this->belongsTo(Empleados::class);
	}

	public function cliente()
	{
		return $this->belongsTo(Clientes::class);
	}

}

/* -----------------------
		SCOPES DE BÚSQUEDA (TODO: AJUSTAR A CITAS) 
	----------------------- 

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
*/

