<?php

use App\Models\CoefficientModifier;
use Illuminate\Database\Seeder;

class CoefficientModifierParterresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*for Modifier*/
        CoefficientModifier::create([
            'type_id' => '3',
            'material_id' => '1',
            'thickness' => '5',
            'coefficient' => '12',
        ]);
        CoefficientModifier::create([
            'type_id' => '3',
            'material_id' => '1',
            'thickness' => '9',
            'coefficient' => '23',
        ]);
        CoefficientModifier::create([
            'type_id' => '3',
            'material_id' => '2',
            'thickness' => '5',
            'coefficient' => '20',
        ]);
        CoefficientModifier::create([
            'type_id' => '3',
            'material_id' => '2',
            'thickness' => '9',
            'coefficient' => '28',
        ]);
        CoefficientModifier::create([
            'type_id' => '3',
            'material_id' => '3',
            'thickness' => '5',
            'coefficient' => '20.5',
        ]);
        CoefficientModifier::create([
            'type_id' => '3',
            'material_id' => '3',
            'thickness' => '9',
            'coefficient' => '28.5',
        ]);
        CoefficientModifier::create([
            'type_id' => '3',
            'material_id' => '4',
            'thickness' => '5',
            'coefficient' => '21',
        ]);
        CoefficientModifier::create([
            'type_id' => '3',
            'material_id' => '4',
            'thickness' => '9',
            'coefficient' => '29',
        ]);
        CoefficientModifier::create([
            'type_id' => '3',
            'material_id' => '5',
            'thickness' => '5',
            'coefficient' => '28',
        ]);
        CoefficientModifier::create([
            'type_id' => '3',
            'material_id' => '5',
            'thickness' => '9',
            'coefficient' => '33',
        ]);
        CoefficientModifier::create([
            'type_id' => '3',
            'material_id' => '6',
            'thickness' => '5',
            'coefficient' => '30',
        ]);
        CoefficientModifier::create([
            'type_id' => '3',
            'material_id' => '6',
            'thickness' => '9',
            'coefficient' => '35',
        ]);
        CoefficientModifier::create([
            'type_id' => '3',
            'material_id' => '7',
            'thickness' => '5',
            'coefficient' => '31',
        ]);
        CoefficientModifier::create([
            'type_id' => '3',
            'material_id' => '7',
            'thickness' => '9',
            'coefficient' => '36',
        ]);
    }
}
