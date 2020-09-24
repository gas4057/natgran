<?php

use Illuminate\Database\Seeder;
use App\Models\Delivery;

class DeliveryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            Delivery::create([
                'city' => $faker->city,
                'address' => $faker->address,
                'is_warehouse' => false,
                'price' => $faker->randomNumber(3),
            ]);
        }
        $delivery = Delivery::find(1);
        $delivery->is_warehouse = true;
        $delivery->save();
    }
}
