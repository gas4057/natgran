<?php

use Illuminate\Database\Seeder;

class TombstoneColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\TombstoneTextColor::create([
            'color' => 'Белая краска',
            'stella_price' => 25,
            'tombstone_price' => 60,
            'price' => 1.5,
        ]);
        \App\Models\TombstoneTextColor::create([
            'color' => 'Золотая краска',
            'stella_price' => 45,
            'tombstone_price' => 90,
            'price' => 2.5,
        ]);
        \App\Models\TombstoneTextColor::create([
            'color' => 'Бронзовые буквы Caggiati',
            'price' => 6.5,
        ]);
        \App\Models\TombstoneTextColor::create([
            'color' => 'Хромовые буквы Caggiati',
            'price' => 7,
        ]);
    }
}
