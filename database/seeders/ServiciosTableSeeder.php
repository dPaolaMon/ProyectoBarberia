<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Servicio;

class ServiciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Dentro del método run() de su ServiciosTableSeeder.php

$serviciosData = [
    [
        'nombre' => 'Corte Clásico', 
        'descripcion' => 'Corte con tijera y/o máquina, acabado tradicional.', 
        'duracion' => '30 min', 
        'precio' => 150.00, // Original: 15.00 -> 150.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Afeitado a Navaja (Tradicional)', 
        'descripcion' => 'Afeitado facial con toallas calientes, aceite pre-afeitado y navaja.', 
        'duracion' => '45 min', 
        'precio' => 250.00, // Original: 25.00 -> 250.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Corte de Autor', 
        'descripcion' => 'Diseño de estilo personalizado, incluye lavado y styling.', 
        'duracion' => '45 min', 
        'precio' => 280.00, // Original: 28.00 -> 280.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Arreglo de Barba (Básico)', 
        'descripcion' => 'Perfilado con máquina y trimmer, sin navaja.', 
        'duracion' => '15 min', 
        'precio' => 120.00, // Original: 12.00 -> 120.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Arreglo de Barba (Premium)', 
        'descripcion' => 'Diseño completo, perfilado con navaja y productos post-afeitado.', 
        'duracion' => '30 min', 
        'precio' => 200.00, // Original: 20.00 -> 200.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Corte + Arreglo de Barba', 
        'descripcion' => 'Paquete de Corte Clásico y Arreglo de Barba Básico.', 
        'duracion' => '45 min', 
        'precio' => 250.00, // Original: 25.00 -> 250.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Corte Fade (Degradado)', 
        'descripcion' => 'Corte moderno con transición de longitud muy corta a larga.', 
        'duracion' => '40 min', 
        'precio' => 200.00, // Original: 20.00 -> 200.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Diseño de Cejas', 
        'descripcion' => 'Depilación o perfilado de cejas con navaja o pinzas.', 
        'duracion' => '10 min', 
        'precio' => 80.00, // Original: 8.00 -> 80.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Mascarilla Facial', 
        'descripcion' => 'Aplicación de mascarilla purificante y tónica, con masaje facial.', 
        'duracion' => '20 min', 
        'precio' => 150.00, // Original: 15.00 -> 150.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Lavado y Masaje Capilar', 
        'descripcion' => 'Lavado profundo con shampoo y acondicionador, incluye masaje relajante.', 
        'duracion' => '15 min', 
        'precio' => 100.00, // Original: 10.00 -> 100.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Retoque de Color (Barba)', 
        'descripcion' => 'Aplicación de tinte para cubrir canas o igualar color de la barba.', 
        'duracion' => '30 min', 
        'precio' => 220.00, // Original: 22.00 -> 220.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Rasurado de Cabeza', 
        'descripcion' => 'Afeitado completo de la cabeza con máquina y navaja, acabado suave.', 
        'duracion' => '35 min', 
        'precio' => 200.00, // Original: 20.00 -> 200.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Corte Infantil', 
        'descripcion' => 'Corte de cabello para niños menores de 12 años.', 
        'duracion' => '25 min', 
        'precio' => 130.00, // Original: 13.00 -> 130.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Delineado de Contornos', 
        'descripcion' => 'Perfilado rápido de cuello y sienes sin modificar el corte principal.', 
        'duracion' => '10 min', 
        'precio' => 70.00, // Original: 7.00 -> 70.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Tratamiento Anticaída', 
        'descripcion' => 'Aplicación de productos especializados y masaje vigorizante.', 
        'duracion' => '25 min', 
        'precio' => 180.00, // Original: 18.00 -> 180.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Afeitado Head to Toe', 
        'descripcion' => 'Rasurado completo de cabeza y afeitado facial tradicional.', 
        'duracion' => '1 hr 15 min', // Original: 75 min
        'precio' => 400.00, // Original: 40.00 -> 400.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Paquete Ejecutivo', 
        'descripcion' => 'Corte de Autor, Afeitado Tradicional y Mascarilla Facial.', 
        'duracion' => '1 hr 30 min', // Original: 90 min
        'precio' => 600.00, // Original: 60.00 -> 600.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Corte Tazón (Bowl Cut) Retro', 
        'descripcion' => 'Corte con diseño vintage y texturización.', 
        'duracion' => '35 min', 
        'precio' => 180.00, // Original: 18.00 -> 180.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Delineado de Picos/Diseños', 
        'descripcion' => 'Diseño lineal o geométrico rasurado en el cabello.', 
        'duracion' => '20 min', 
        'precio' => 150.00, // Original: 15.00 -> 150.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Tratamiento Hidratante (Cabello)', 
        'descripcion' => 'Aplicación de ampolleta o crema hidratante intensiva.', 
        'duracion' => '20 min', 
        'precio' => 150.00, // Original: 15.00 -> 150.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Perfumado de Barba', 
        'descripcion' => 'Aplicación de aceites y bálsamos de alta gama.', 
        'duracion' => '5 min', 
        'precio' => 50.00, // Original: 5.00 -> 50.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Corte de Máquina Uniforme', 
        'descripcion' => 'Corte rápido a una sola medida con máquina.', 
        'duracion' => '20 min', 
        'precio' => 120.00, // Original: 12.00 -> 120.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Paquete Novio / Evento', 
        'descripcion' => 'Corte, arreglo de barba y tratamiento facial, con bebida premium.', 
        'duracion' => '2 hr', // Original: 120 min
        'precio' => 850.00, // Original: 85.00 -> 850.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Corte y Peinado (Dama)', 
        'descripcion' => 'Servicio enfocado en cabello corto femenino (Pixie, Bob).', 
        'duracion' => '45 min', 
        'precio' => 300.00, // Original: 30.00 -> 300.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Ritual de Barba Caliente', 
        'descripcion' => 'Arreglo de barba con aromaterapia y toallas extra calientes.', 
        'duracion' => '45 min', 
        'precio' => 350.00, // Original: 35.00 -> 350.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Corte UnderCut (Desconectado)', 
        'descripcion' => 'Corte donde la parte superior e inferior no se fusionan.', 
        'duracion' => '40 min', 
        'precio' => 220.00, // Original: 22.00 -> 220.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Decoloración (Mechas de Barba)', 
        'descripcion' => 'Aplicación de decolorante en zonas específicas de la barba.', 
        'duracion' => '1 hr', // Original: 60 min
        'precio' => 400.00, // Original: 40.00 -> 400.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Tinte Capilar (Un color)', 
        'descripcion' => 'Aplicación de tinte uniforme en todo el cabello.', 
        'duracion' => '1 hr 15 min', // Original: 75 min
        'precio' => 450.00, // Original: 45.00 -> 450.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Masaje Cervical Express', 
        'descripcion' => 'Masaje de cuello y hombros al finalizar cualquier servicio.', 
        'duracion' => '10 min', // Original: 10 min
        'precio' => 100.00, // Original: 10.00 -> 100.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
    [
        'nombre' => 'Retoque de Nuca y Patillas', 
        'descripcion' => 'Mantenimiento rápido entre citas para alargar el corte.', 
        'duracion' => '10 min', // Original: 10 min
        'precio' => 50.00, // Original: 5.00 -> 50.00
        'created_at' => now(), 
        'updated_at' => now()
    ],
];

        // Ejecutar la inserción
        DB::table('servicios')->insert($serviciosData);
    }
}
