<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
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
            'description' => $this->faker->paragraph,
            'quantity' => rand(100, 300),
            'category_id' => rand(1, 10),
        ];
    }
}
