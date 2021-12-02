<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Alumno;

class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     *   
     * @return array
     */
    public function definition()
    {
        return [
            //
            'grado_id'=>$this->faker->numberBetween(1,12),
            'nombre'=>$this->faker->name,
            'apellido'=>$this->faker->lastname,
            'identidad'=>$this->faker->numerify('####-')
            .$this->faker->numberBetween(2009,2017)
            .$this->faker->unique()->numerify('-####'),
            'fecha_nacimiento'=>$this->faker->dateTimeBetween('-12 years', '5 years'),
            'direccion'=>$this->faker->address
        ];
    }
}
