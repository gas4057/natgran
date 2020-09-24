<?php

use App\Models\CoefficientModifier;
use Illuminate\Database\Seeder;

class CoefficientModifierTombstonesSeeder extends Seeder
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
            'type_id' => '2',
            'material_id' => '1',
            'thickness' => '3',
            'coefficient' => '105',
        ]);
        CoefficientModifier::create([
            'type_id' => '2',
            'material_id' => '1',
            'thickness' => '5',
            'coefficient' => '135',
        ]);
        CoefficientModifier::create([
            'type_id' => '2',
            'material_id' => '1',
            'thickness' => '8',
            'coefficient' => '185',
        ]);
        CoefficientModifier::create([
            'type_id' => '2',
            'material_id' => '2',
            'thickness' => '3',
            'coefficient' => '130',
        ]);
        CoefficientModifier::create([
            'type_id' => '2',
            'material_id' => '2',
            'thickness' => '5',
            'coefficient' => '170',
        ]);
        CoefficientModifier::create([
            'type_id' => '2',
            'material_id' => '2',
            'thickness' => '8',
            'coefficient' => '240',
        ]);
        CoefficientModifier::create([
            'type_id' => '2',
            'material_id' => '3',
            'thickness' => '3',
            'coefficient' => '160',
        ]);
        CoefficientModifier::create([
            'type_id' => '2',
            'material_id' => '3',
            'thickness' => '5',
            'coefficient' => '240',
        ]);
        CoefficientModifier::create([
            'type_id' => '2',
            'material_id' => '3',
            'thickness' => '8',
            'coefficient' => '340',
        ]);
        CoefficientModifier::create([
            'type_id' => '2',
            'material_id' => '4',
            'thickness' => '3',
            'coefficient' => '163',
        ]);
        CoefficientModifier::create([
            'type_id' => '2',
            'material_id' => '4',
            'thickness' => '5',
            'coefficient' => '245',
        ]);
        CoefficientModifier::create([
            'type_id' => '2',
            'material_id' => '4',
            'thickness' => '8',
            'coefficient' => '345',
        ]);
        CoefficientModifier::create([
            'type_id' => '2',
            'material_id' => '5',
            'thickness' => '3',
            'coefficient' => '150',
        ]);
        CoefficientModifier::create([
            'type_id' => '2',
            'material_id' => '5',
            'thickness' => '5',
            'coefficient' => '220',
        ]);
        CoefficientModifier::create([
            'type_id' => '2',
            'material_id' => '5',
            'thickness' => '8',
            'coefficient' => '320',
        ]);
        CoefficientModifier::create([
            'type_id' => '2',
            'material_id' => '6',
            'thickness' => '3',
            'coefficient' => '132',
        ]);
        CoefficientModifier::create([
            'type_id' => '2',
            'material_id' => '6',
            'thickness' => '5',
            'coefficient' => '175',
        ]);
        CoefficientModifier::create([
            'type_id' => '2',
            'material_id' => '6',
            'thickness' => '8',
            'coefficient' => '245',
        ]);
        CoefficientModifier::create([
            'type_id' => '2',
            'material_id' => '7',
            'thickness' => '3',
            'coefficient' => '133',
        ]);
        CoefficientModifier::create([
            'type_id' => '2',
            'material_id' => '7',
            'thickness' => '5',
            'coefficient' => '177',
        ]);
        CoefficientModifier::create([
            'type_id' => '2',
            'material_id' => '7',
            'thickness' => '8',
            'coefficient' => '247',
        ]);

    }
}
