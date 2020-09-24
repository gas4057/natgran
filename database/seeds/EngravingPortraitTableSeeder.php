<?php

use App\Models\EngravingPortraitSize;
use App\Models\EngravingPortraitType;
use Illuminate\Database\Seeder;

class EngravingPortraitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EngravingPortraitSize::create([
            'value' => 'Гравировка портрета стандартных размеров до 25 см.',
            'price' => 100
        ]);
        EngravingPortraitSize::create([
            'value' => 'Гравировка портрета больших размеров свыше 25 см.',
            'price' => 200
        ]);

        EngravingPortraitType::create([
            'value' => 'Компьютерная гравировка.',
            'price' => 100
        ]);
        EngravingPortraitType::create([
            'value' => 'Ручная гравировка.',
            'price' => 200
        ]);

        \App\Models\EngravingPortrait::create([
            'type_id' => 1,
            'size_id' => 1,
            'price' => rand(10,50)
        ]);
        \App\Models\EngravingPortrait::create([
            'type_id' => 1,
            'size_id' => 2,
            'price' => rand(10,50)
        ]);
        \App\Models\EngravingPortrait::create([
            'type_id' => 2,
            'size_id' => 1,
            'price' => rand(10,50)
        ]);
        \App\Models\EngravingPortrait::create([
            'type_id' => 2,
            'size_id' => 2,
            'price' => rand(10,50)
        ]);
    }
}
