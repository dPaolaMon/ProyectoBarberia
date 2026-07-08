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
        Schema::table('users', function (Blueprint $table) {
            // Agregamos la columna role.
			$table->enum('role', ['admin', 'employee', 'client'])->default('client')->after('email');

			// Opcional: Eliminar la contraseña si ya existe y se quiere mover el campo 
			// aunque en una instalación limpia de Laravel ya estará presente.
			// $table->string('password')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('role');
        });
    }
};
