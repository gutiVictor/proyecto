<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Docente>
 */
class DocenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        /* retornamos un arreglo con los datos del docente */
        return [
            'nombre' => $this->faker->name(),
            'apellido' => $this->faker->lastName(),
            'correo_electronico' => $this->faker->unique()->safeEmail(),
            //
        ];
    }
}
