<?php

use App\Models\StellaImage;
use Illuminate\Database\Seeder;

class StellaImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 6; $i++) {
            StellaImage::create([
                'type_id' => 1,
//                'price' => $faker->randomNumber(3)
            ]);
            StellaImage::create([
                'type_id' => 2,
//                'price' => $faker->randomNumber(3)
            ]);
        }
    }
}
