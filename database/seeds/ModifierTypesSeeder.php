<?php

use App\Models\ModifierType;
use Illuminate\Database\Seeder;

class ModifierTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModifierType::create([
            'type' => 'Stella'
        ]);
        ModifierType::create([
            'type' => 'Tombstones'
        ]);
        ModifierType::create([
            'type' => 'Parterres'
        ]);
        ModifierType::create([
            'type' => 'Pedestals'
        ]);
    }
}
