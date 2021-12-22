<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
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
            'name' => ucwords($this->faker->word),
            'field_id' => rand(1, 10),
            'phone' => $this->faker->phoneNumber,
            // 'age' => rand(20, 60),
            'image' => 'doctor_3.jpg',

        ];
    }
}
