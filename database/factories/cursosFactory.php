<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\cursos;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cursos>
 */
class cursosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [ /**Usando faker para el factory de cursos */
            'cursos' => $this -> faker -> words(3, true),
            'portada' => $this -> faker -> sentence(3),
            'contenido' => $this -> faker -> paragraph(2),
            'materialDidactico' => $this -> faker -> words(2, true),
        ];
    }
}
