<?php

namespace Database\Seeders;

use App\Models\Passport;
use Illuminate\Database\Seeder;

class PassportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Passport::create([
            'user_id' => 1,
            'passport_no' => 'OM0988867',
        ]);
    }
}
