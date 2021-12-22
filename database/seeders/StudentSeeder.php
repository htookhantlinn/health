<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Student::create([
            'name' => 'Mg Mg',
            'address_id' => 2,
        ]);
        Student::create([
            'name' => 'Ko aung',
            'address_id' => 3,
        ]);
        Student::create([
            'name' => 'Aye aung',
            'address_id' => 4,
        ]);
    }
}
