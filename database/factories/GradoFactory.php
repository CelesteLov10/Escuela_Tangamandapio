<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Grado;

class GradoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'profesor_id'=>$this->faker->numberBetween(1,6),
            'alumno_id'=>$this->faker->numberBetween(1,6),
            'grado_id'=>$this->faker->numberBetween(1,6),
            'nombre_clase'=>$this->faker->randomElement($array = array ('C. naturales','C. sociales','espaniol','matematicas','dibujo')),
            'jornada'=>$this->faker->randomElement($array = array ('matutina','vespertina'))
        ];
    }
}
