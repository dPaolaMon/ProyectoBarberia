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
        Schema::table('clientes', function (Blueprint $table) {
            // 1. Eliminar el campo correo, ya que la autenticación lo manejará 'users'.
			$table->dropColumn('correo'); 

			// 2. Agregar la clave foránea user_id.
			$table->foreignId('user_id')->constrained('users')->onDelete('cascade');

			// 3. Ajustar campos que ya no son necesarios (si existieran).
			// $table->dropColumn('password'); // Si se incluyó por error.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // Eliminar la restricción
			$table->dropColumn('user_id');   // Eliminar la columna
			$table->string('correo')->nullable(); // Opcional: Revertir campo eliminado
        });
    }
};
