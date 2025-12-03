<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('citas', function (Blueprint $table) {      
            // Columna de Empleado (Quién da el servicio)
            $table->foreignId('empleado_id')
                  ->nullable() // Puede ser nulo si el empleado se elimina o la cita es genérica
                  ->constrained('empleados')
                  ->onDelete('set null'); 
            
            // Columna de Cliente (Quién recibe el servicio)
            $table->foreignId('cliente_id')
                  ->constrained('clientes') // Asume que la tabla es 'clientes'
                  ->onDelete('cascade'); // Si el cliente se elimina, las citas se van.

            // Columna de Servicio (Qué servicio se realizará)
            $table->foreignId('servicio_id')
                  ->nullable() 
                  ->constrained('servicios') // Asume que la tabla es 'servicios'
                  ->onDelete('set null');
            
            // 2. Datos de Tiempo y Estado
            $table->date('fecha'); // La fecha del día
            $table->time('hora_inicio'); // Hora de comienzo
            $table->time('hora_fin')->nullable(); // Hora de finalización (calculada o nula)
            $table->string('estado', 50)->default('pendiente'); // Estado inicial (ej., pendiente, completada, cancelada)

            // 3. Trazabilidad
            // Si la tabla original no tenía timestamps, debe agregarlos:
            // $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('citas', function (Blueprint $table) {
            
            // Eliminar las claves foráneas primero para evitar errores de integridad
            $table->dropForeign(['empleado_id']);
            $table->dropForeign(['cliente_id']);
            $table->dropForeign(['servicio_id']);

            // Luego, eliminar las columnas añadidas
            $table->dropColumn(['empleado_id', 'cliente_id', 'servicio_id', 'fecha', 'hora_inicio', 'hora_fin', 'estado']);
        });
    }
};
