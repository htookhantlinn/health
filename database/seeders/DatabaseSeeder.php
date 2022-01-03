<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Category;
use App\Models\Doctor;
use App\Models\Field;
use App\Models\Item;
use App\Models\Passport;
use App\Models\Student;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Field::factory()->count(10)->create();
        Doctor::factory(10)->create();
        Item::factory()->count(20)->create();
        Category::factory()->count(10)->create();

        $this->call(
            [
                UserSeeder::class,
                BlogSeeder::class,
            ]

        );
    }
}
