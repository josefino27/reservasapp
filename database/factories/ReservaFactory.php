<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReservaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_clase'      =>$this->faker->numberbetween(1,5),
            'id_usuario'    =>$this->faker->numberbetween(1,5)
        ];
    }
}
