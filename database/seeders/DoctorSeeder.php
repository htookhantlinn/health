<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;
use Faker;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 10; $i <= 60; $i++) {
            Doctor::create([
                'name' => 'Doctor_' . $i,
                'field_id' => rand(1, 10),
                'phone' => $faker->phoneNumber,
                'image' => 'doctor_3.jpg',
            ]);
        }
    }
}
