<?php

use App\Models\TombstoneImage;
use Illuminate\Database\Seeder;

class TombstoneImageTableSeeder extends Seeder
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
            TombstoneImage::create([
                'type_id' => 1,
//                'price' => $faker->randomNumber(3)
            ]);
            TombstoneImage::create([
                'type_id' => 2,
//                'price' => $faker->randomNumber(3)
            ]);
        }

    }
}
