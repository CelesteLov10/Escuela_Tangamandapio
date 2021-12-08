<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Profesor;

class ProfesorFactory extends Factory
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
            'grado_id'=>$this->faker->numberBetween(1,6),
            'profesor_id'=>$this->faker->numberBetween(1,6),
            'nombre'=>$this->faker->name,
            'apellido'=>$this->faker->lastname,
            'identidad'=>$this->faker->numerify('####-')
            .$this->faker->numberBetween(1950,2000)
            .$this->faker->unique()->numerify('-#####'),
            'clase'=>$this->faker->randomElement($array = array ('C. naturales','C. sociales','espaniol','matematicas','dibujo')),
            'telefono'=>$this->faker->e164PhoneNumber

        ];
    }
}
