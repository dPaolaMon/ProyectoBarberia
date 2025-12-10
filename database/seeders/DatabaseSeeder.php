<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
        $this->call([
            UsersTableSeeder::class,     // Insertará todos los usuarios (incluidos los 8 empleados)
            ServiciosTableSeeder::class,
            EmpleadosTableSeeder::class, // Insertará los datos detallados de los empleados
            ClientesTableSeeder::class,  // 3. Clientes (Usa los user_id 14-25)
        ]);
    }
}
