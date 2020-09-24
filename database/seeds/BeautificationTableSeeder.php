<?php

use Illuminate\Database\Seeder;

class BeautificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Beautification::create([
            'product_type_id' => 1,
            'product_subtype_id' => 1,
            'price' => 1123,
        ]);
        \App\Models\Beautification::create([
            'product_type_id' => 1,
            'product_subtype_id' => 2,
            'price' => 1123,
        ]);
        \App\Models\Beautification::create([
            'product_type_id' => 1,
            'product_subtype_id' => 3,
            'price' => 1123,
        ]);
        \App\Models\Beautification::create([
            'product_type_id' => 1,
            'product_subtype_id' => 4,
            'price' => 1123,
        ]);
        \App\Models\Beautification::create([
            'product_type_id' => 2,
            'product_subtype_id' => 1,
            'price' => 1123,
        ]);
        \App\Models\Beautification::create([
            'product_type_id' => 2,
            'product_subtype_id' => 2,
            'price' => 1123,
        ]);
        \App\Models\Beautification::create([
            'product_type_id' => 2,
            'product_subtype_id' => 3,
            'price' => 1123,
        ]);
        \App\Models\Beautification::create([
            'product_type_id' => 2,
            'product_subtype_id' => 4,
            'price' => 1123,
        ]);
    }
}
