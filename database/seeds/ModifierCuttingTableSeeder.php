<?php

use App\Models\ModifierCutting;
use Illuminate\Database\Seeder;

class ModifierCuttingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModifierCutting::create([
            'product_id' => 1,
            'thickness' => 5,
            'coefficient' => 25
        ]);
        ModifierCutting::create([
            'product_id' => 1,
            'thickness' => 8,
            'coefficient' => 30
        ]);
        ModifierCutting::create([
            'product_id' => 1,
            'thickness' => 10,
            'coefficient' => 35
        ]);
    }
}
