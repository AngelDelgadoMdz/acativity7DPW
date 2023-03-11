<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\usuarios;

class usuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios') -> insert([
            ['nombreUsuario' => 'Admon', 'email' => 'admon@robotics.com', 'password' => 'Adm@2022', 'rol' => 'Administrativo'], 
            ['nombreUsuario' => 'Tecmilenio', 'email' => 'tecmilenio@robotics.com', 'password' => 'Adm@2022', 'rol' => 'Profesor'], 
            ['nombreUsuario' => 'Estudiante', 'email' => 'student@robotics.com', 'password' => 'Adm@2022', 'rol' => 'Estudiante'],
        ]);
    }
}
