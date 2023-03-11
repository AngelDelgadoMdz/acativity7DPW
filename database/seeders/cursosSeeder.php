<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\cursos;

class cursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('cursos') -> insert([

        //     ['cursos' => 'Introduction to robotics', 'portada' => 'Introduction to robotics', 'contenido' => 'Un curso introductorio de robotica', 'materialDidactico' => 'Starterkit'],
        //     ['cursos' => 'Introduction to automation', 'portada' => 'Introduction to automation', 'contenido' => 'Un curso introductorio de automatizacion', 'materialDidactico' => 'Starterkit'],
        //     ['cursos' => 'Programming for robotics', 'portada' => 'Programming robots', 'contenido' => 'Un curso de programacion para robotica', 'materialDidactico' => 'Educational Robotics Kit'],
        //     ['cursos' => 'Characteristics of a robot ', 'portada' => 'Más sobre robots', 'contenido' => 'Un curso sobre robotica', 'materialDidactico' => 'kit5'],

        // ]);


            cursos::factory() -> count(100) -> create();


    }
}
