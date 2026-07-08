<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        $usersData = [
		// Empleados 8 registros)
		['id' => 6, 'name' => 'Antonio Torres', 'email' => 'antonio.torres@barberia.com', 'password' => Hash::make('TorresAnt2025'), 'role' => 'employee'],
		['id' => 7, 'name' => 'Ricardo Herrera', 'email' => 'ricardo.herrera@barberia.com', 'password' => Hash::make('RHerre1994'), 'role' => 'employee'],
		['id' => 8, 'name' => 'Valeria Cruz', 'email' => 'valeria.cruz@barberia.com', 'password' => Hash::make('ValeC98_Barber'), 'role' => 'employee'],
		['id' => 9, 'name' => 'Omar Reyes', 'email' => 'omar.reyes@barberia.com', 'password' => Hash::make('OmarReyes38'), 'role' => 'employee'],
		['id' => 10, 'name' => 'Sofía Blanco', 'email' => 'sofia.blanco@barberia.com', 'password' => Hash::make('SofiB2001'), 'role' => 'employee'],
		['id' => 11, 'name' => 'Daniel Guzmán', 'email' => 'daniel.guzman@barberia.com', 'password' => Hash::make('DanielGuzm45'), 'role' => 'employee'],
		['id' => 12, 'name' => 'Jorge Bravo', 'email' => 'jorge.bravo@barberia.com', 'password' => Hash::make('JBravo30'), 'role' => 'employee'],
		['id' => 13, 'name' => 'Isabel Flores', 'email' => 'isabel.flores@barberia.com', 'password' => Hash::make('IFlores92'), 'role' => 'employee'],

		// --- CLIENTES (IDs 14 al 25) ---
		['id' => 14, 'name' => 'Juan Garcia', 'email' => 'juan.garcia@cliente.com', 'password' => Hash::make('ClienteJuan123'), 'role' => 'client'],
		['id' => 15, 'name' => 'Ana Martinez', 'email' => 'ana.martinez@cliente.com', 'password' => Hash::make('AnaMrtz!'), 'role' => 'client'],
		['id' => 16, 'name' => 'Carlos Rojas', 'email' => 'carlos.rojas@cliente.com', 'password' => Hash::make('CarlosR345'), 'role' => 'client'],
		['id' => 17, 'name' => 'Laura Perez', 'email' => 'laura.perez@cliente.com', 'password' => Hash::make('LauraPerez20'), 'role' => 'client'],
		['id' => 18, 'name' => 'Diego Sanchez', 'email' => 'diego.sanchez@cliente.com', 'password' => Hash::make('DiegoSanchezVIP'), 'role' => 'client'],
		['id' => 19, 'name' => 'Maria Lopez', 'email' => 'maria.lopez@cliente.com', 'password' => Hash::make('MariaLopez45'), 'role' => 'client'],
		['id' => 20, 'name' => 'Alberto Hernandez', 'email' => 'alberto.hernandez@cliente.com', 'password' => Hash::make('AlbertoH99'), 'role' => 'client'],
		['id' => 21, 'name' => 'Patricia Vidal', 'email' => 'patricia.vidal@cliente.com', 'password' => Hash::make('PattyVidal'), 'role' => 'client'],
		['id' => 22, 'name' => 'Jose Ramirez', 'email' => 'jose.ramirez@cliente.com', 'password' => Hash::make('JoseRamírez'), 'role' => 'client'],
		['id' => 23, 'name' => 'Fernanda Cruz', 'email' => 'fernanda.cruz@cliente.com', 'password' => Hash::make('FernandaC78'), 'role' => 'client'],
		['id' => 24, 'name' => 'Miguel Angel', 'email' => 'miguel.angel@cliente.com', 'password' => Hash::make('MiguelA123'), 'role' => 'client'],
		['id' => 25, 'name' => 'Veronica Paz', 'email' => 'veronica.paz@cliente.com', 'password' => Hash::make('VeroPaz2025'), 'role' => 'client'],
			];

		// Usamos el ORM para insertar los registro	s
		User::insert($usersData);
    }
}
