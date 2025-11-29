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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->tinyinteger('edad');
            $table->date('fecha_nac'); // tipo de dato
            $table->string('telefono', 15);            
            $table->string('calle', 100);
            $table->integer('mz');
            $table->integer('lt');
            $table->string('municipio', 100);            
            $table->string('estado', 100);
            $table->string('cp', 10);
            //$table->string('usuario', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
