<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
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
            'name' => $this->faker->name,
            'email' => $this->faker->email(),
            'email_verified_at' => now(),
            'mobile' => $this->faker->phoneNumber,
            'role_id' => rand(1, 3),
            'password' => '$2a$12$Ujlf69qcZTCfvtcLMD5Ug.i8i82FH3fLHpKjVDHNtYjdTLnsiWtGC',
            'remember_token' => Str::random(10),
        ];
    }
}
