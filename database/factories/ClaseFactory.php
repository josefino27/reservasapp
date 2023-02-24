<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
               
                'nombreClase' => $this->faker->randomElement(['rumba','boxeo','personalizado']),
                'cupo' => $this->faker->randomElement([10,20,30]),
                'fecha' => $this->faker->dateTime($format = 'Y-m-d'),
                'comienza' => $this->faker->time($format = 'H:i:s'),
                'termina' => $this->faker->time($format = 'H:i:s', $max = 'now'),
                'descripcion' => $this->faker->paragraph(),
                'imagen' => $this->faker->imageUrl($width = 640, $height = 480)
        ];
    }
}
