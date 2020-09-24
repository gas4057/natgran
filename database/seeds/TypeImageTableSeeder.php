<?php

use App\Models\TypeImage;
use Illuminate\Database\Seeder;

class TypeImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeImage::create([
            'type' => 'Православные кресты',
            'slug' => 'christian'
        ]);
        TypeImage::create([
            'type' => 'Католические кресты',
            'slug' => 'catholic'
        ]);
        TypeImage::create([
            'type' => 'тестовый тип',
            'slug' => 'test'
        ]);
    }
}
