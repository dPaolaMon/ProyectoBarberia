<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empleados; // Importe el modelo Empleado
use Illuminate\Support\Facades\DB; // Opcional, pero se mantiene para consistencia
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmpleadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Definición de los datos de los 8 empleados
        $empleadosData = [
            // El 'id' aquí es el ID primario de la tabla 'empleados'.
            [
                'id' => 6, 'nombre' => 'Antonio', 'apellido' => 'Torres Gámez', 'edad' => 22, 'fecha_nac' => '2003-09-01', 'telefono' => '5566778899',
                'calle' => 'Eje Central 500', 'mz' => '10', 'lt' => '03', 'municipio' => 'Cuauhtémoc', 'estado' => 'CDMX', 'cp' => '06010', 
                'user_id' => 6, 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'id' => 7, 'nombre' => 'Ricardo', 'apellido' => 'Herrera Ruiz', 'edad' => 31, 'fecha_nac' => '1994-07-28', 'telefono' => '5500112233',
                'calle' => 'Vía Láctea 15', 'mz' => '15', 'lt' => '08', 'municipio' => 'Álvaro Obregón', 'estado' => 'CDMX', 'cp' => '01020', 
                'user_id' => 7, 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'id' => 8, 'nombre' => 'Valeria', 'apellido' => 'Cruz Ramos', 'edad' => 27, 'fecha_nac' => '1998-04-05', 'telefono' => '5598761234',
                'calle' => 'Calle Río Bravo 45', 'mz' => '22', 'lt' => '11', 'municipio' => 'Naucalpan', 'estado' => 'EdoMex', 'cp' => '53000', 
                'user_id' => 8, 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'id' => 9, 'nombre' => 'Omar', 'apellido' => 'Reyes Vidal', 'edad' => 38, 'fecha_nac' => '1987-01-19', 'telefono' => '5521098765',
                'calle' => 'Blvd. Olmos 12', 'mz' => '05', 'lt' => '02', 'municipio' => 'Tlalpan', 'estado' => 'CDMX', 'cp' => '14050', 
                'user_id' => 9, 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'id' => 10, 'nombre' => 'Sofía', 'apellido' => 'Blanco Peña', 'edad' => 24, 'fecha_nac' => '2001-06-12', 'telefono' => '5545678901',
                'calle' => 'Andador Uno 7B', 'mz' => '30', 'lt' => '18', 'municipio' => 'Ecatepec', 'estado' => 'EdoMex', 'cp' => '55020', 
                'user_id' => 10, 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'id' => 11, 'nombre' => 'Daniel', 'apellido' => 'Guzmán Lara', 'edad' => 45, 'fecha_nac' => '1980-03-25', 'telefono' => '5578901234',
                'calle' => 'Calzada Norte 88', 'mz' => '03', 'lt' => '07', 'municipio' => 'Azcapotzalco', 'estado' => 'CDMX', 'cp' => '02040', 
                'user_id' => 11, 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'id' => 12, 'nombre' => 'Jorge', 'apellido' => 'Bravo Nájera', 'edad' => 29, 'fecha_nac' => '1996-10-30', 'telefono' => '5511223344',
                'calle' => 'Circuito Interior 9', 'mz' => '18', 'lt' => '04', 'municipio' => 'Gustavo A. Madero', 'estado' => 'CDMX', 'cp' => '07070', 
                'user_id' => 12, 'created_at' => now(), 'updated_at' => now()
            ],
            [
                'id' => 13, 'nombre' => 'Isabel', 'apellido' => 'Flores Vega', 'edad' => 33, 'fecha_nac' => '1992-12-08', 'telefono' => '5565432109',
                'calle' => 'Avenida Sur 56', 'mz' => '09', 'lt' => '01', 'municipio' => 'Nezahualcóyotl', 'estado' => 'EdoMex', 'cp' => '57000', 
                'user_id' => 13, 'created_at' => now(), 'updated_at' => now()
            ],
        ];

        // Ejecutar la inserción de los 8 registros
        Empleados::insert($empleadosData);
    }
}
