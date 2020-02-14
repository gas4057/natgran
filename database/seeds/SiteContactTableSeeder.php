<?php

use Illuminate\Database\Seeder;
use App\Models\SiteContact;

class SiteContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        SiteContact::create([
            'email' => 'admin@natgran.by',
            'skype' => 'skype',
        ]);
        SiteContact::create([
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
        ]);
        SiteContact::create([
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
        ]);
        SiteContact::create([
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
        ]);
        SiteContact::create([
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
        ]);

    }
}
