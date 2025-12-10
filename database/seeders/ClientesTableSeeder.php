<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Clientes;
use Illuminate\Support\Facades\DB;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $clientesData = [
            [
                'id' => 1, 'nombre' => 'Juan', 'apellido' => 'Garcia', 'fecha_nac' => '1995-05-20', 
                'telefono' => '5511122233', 'total_visitas' => 5, 'user_id' => 14, 
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'id' => 2, 'nombre' => 'Ana', 'apellido' => 'Martinez', 'fecha_nac' => '1998-03-10', 
                'telefono' => '5522334455', 'total_visitas' => 12, 'user_id' => 15, 
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'id' => 3, 'nombre' => 'Carlos', 'apellido' => 'Rojas', 'fecha_nac' => '1990-11-25', 
                'telefono' => '5533445566', 'total_visitas' => 1, 'user_id' => 16, 
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'id' => 4, 'nombre' => 'Laura', 'apellido' => 'Perez', 'fecha_nac' => '1992-07-17', 
                'telefono' => '5544556677', 'total_visitas' => 8, 'user_id' => 17, 
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'id' => 5, 'nombre' => 'Diego', 'apellido' => 'Sanchez', 'fecha_nac' => '1985-01-01', 
                'telefono' => '5555667788', 'total_visitas' => 25, 'user_id' => 18, 
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'id' => 6, 'nombre' => 'Maria', 'apellido' => 'Lopez', 'fecha_nac' => '1997-09-08', 
                'telefono' => '5566778899', 'total_visitas' => 3, 'user_id' => 19, 
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'id' => 7, 'nombre' => 'Alberto', 'apellido' => 'Hernandez', 'fecha_nac' => '1988-04-14', 
                'telefono' => '5577889900', 'total_visitas' => 15, 'user_id' => 20, 
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'id' => 8, 'nombre' => 'Patricia', 'apellido' => 'Vidal', 'fecha_nac' => '1994-12-05', 
                'telefono' => '5588990011', 'total_visitas' => 4, 'user_id' => 21, 
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'id' => 9, 'nombre' => 'Jose', 'apellido' => 'Ramirez', 'fecha_nac' => '1983-02-28', 
                'telefono' => '5599001122', 'total_visitas' => 9, 'user_id' => 22, 
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'id' => 10, 'nombre' => 'Fernanda', 'apellido' => 'Cruz', 'fecha_nac' => '2000-10-10', 
                'telefono' => '5500112233', 'total_visitas' => 2, 'user_id' => 23, 
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'id' => 11, 'nombre' => 'Miguel', 'apellido' => 'Angel', 'fecha_nac' => '1991-06-22', 
                'telefono' => '5511223344', 'total_visitas' => 6, 'user_id' => 24, 
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'id' => 12, 'nombre' => 'Veronica', 'apellido' => 'Paz', 'fecha_nac' => '1996-08-03', 
                'telefono' => '5522334455', 'total_visitas' => 18, 'user_id' => 25, 
                'created_at' => now(), 'updated_at' => now()
            ],
        ];

        // Ejecutar la inserción de los 12 registros de clientes
        Clientes::insert($clientesData);
    }
}
