<?php

use Illuminate\Database\Seeder;

class MedallionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [];
        $array['form'] = ['Прямоугольный', 'Овальный'];
        $array['size'] = ['9х12', '13х18', '18х24', '20x30', '24x30', '30x40', '40x60'];
        $array['material'] = ['Керамика', 'Керамогра', 'Фарфор', 'Стекло', 'Триплекс'];

        $form1 = \App\Models\MedallionForm::create([
            'value' => 'Прямоугольный'
        ]);

        $form2 = \App\Models\MedallionForm::create([
            'value' => 'Овальный'
        ]);
        foreach ($array['size'] as $size) {
            $size = \App\Models\MedallionSize::create([
                'value' => $size
            ]);
        }

        foreach ($array['material'] as $material) {
            $material = \App\Models\MedallionMaterial::create([
                'value' => $material
            ]);
        }
        $size_id = 0;
        foreach ($array['size'] as $key => $size) {
            $size_id = $size_id + 1;
            \App\Models\Medallion::create([
                'form_id' => $form1->id,
                'size_id' => $size_id,
                'material_id' => 1,
                'price' => rand(10, 120)
            ]);
            \App\Models\Medallion::create([
                'form_id' => $form2->id,
                'size_id' => $size_id,
                'material_id' => 1,
                'price' => rand(10, 120)
            ]);
            \App\Models\Medallion::create([
                'form_id' => $form1->id,
                'size_id' => $size_id,
                'material_id' => 2,
                'price' => rand(10, 120)
            ]);
            \App\Models\Medallion::create([
                'form_id' => $form2->id,
                'size_id' => $size_id,
                'material_id' => 2,
                'price' => rand(10, 120)
            ]);
            \App\Models\Medallion::create([
                'form_id' => $form1->id,
                'size_id' => $size_id,
                'material_id' => 3,
                'price' => rand(10, 120)
            ]);
            \App\Models\Medallion::create([
                'form_id' => $form2->id,
                'size_id' => $size_id,
                'material_id' => 3,
                'price' => rand(10, 120)
            ]);
            \App\Models\Medallion::create([
                'form_id' => $form1->id,
                'size_id' => $size_id,
                'material_id' => 4,
                'price' => rand(10, 120)
            ]);
            \App\Models\Medallion::create([
                'form_id' => $form2->id,
                'size_id' => $size_id,
                'material_id' => 4,
                'price' => rand(10, 120)
            ]);
            \App\Models\Medallion::create([
                'form_id' => $form1->id,
                'size_id' => $size_id,
                'material_id' => 5,
                'price' => rand(10, 120)
            ]);
            \App\Models\Medallion::create([
                'form_id' => $form2->id,
                'size_id' => $size_id,
                'material_id' => 5,
                'price' => rand(10, 120)
            ]);
        }
    }

}
