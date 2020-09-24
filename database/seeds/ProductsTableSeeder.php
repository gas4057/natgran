<?php

use App\Models\ProductSubtype;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i <= 10; $i++) {
            $typeName = \App\Models\ProductType::find(1)->name;
            \App\Models\Product::create([
                'type_id' => '1',
                'subtype_id' => '1',
                'material_id' => random_int(1, 4),
                'actual_price' => '12000',
                'old_price' => '13000',
                'saving' => '1000',
                'name' => $typeName,
                'info' => $faker->text('50'),
                'description' => $faker->text,
                'specifications' => $faker->text('100'),
                'product_code' => $faker->text('5'),
                'size' => $faker->text('6'),
                'weight' => $faker->randomNumber(3),
                'warranty' => $faker->randomNumber(3),
                'storage' => $faker->text('6'),
                'image' => '',
            ]);
        }
        for ($i = 0; $i <= 10; $i++) {
            $typeName = \App\Models\ProductType::find(1)->name;
            \App\Models\Product::create([
                'type_id' => '1',
                'subtype_id' => '2',
                'material_id' => random_int(1, 4),
                'actual_price' => '12000',
                'old_price' => '13000',
                'saving' => '1000',
                'name' => $typeName,
                'info' => $faker->text('50'),
                'description' => $faker->text,
                'specifications' => $faker->text('100'),
                'product_code' => $faker->text('5'),
                'size' => $faker->text('6'),
                'weight' => $faker->randomNumber(3),
                'warranty' => $faker->randomNumber(3),
                'storage' => $faker->text('6'),
                'image' => '',
            ]);
        }
        for ($i = 0; $i <= 10; $i++) {
            $typeName = \App\Models\ProductType::find(1)->name;
            \App\Models\Product::create([
                'type_id' => '1',
                'subtype_id' => '3',
                'material_id' => random_int(1, 4),
                'actual_price' => '12000',
                'old_price' => '13000',
                'saving' => '1000',
                'name' => $typeName,
                'info' => $faker->text('50'),
                'description' => $faker->text,
                'specifications' => $faker->text('100'),
                'product_code' => $faker->text('5'),
                'size' => $faker->text('6'),
                'weight' => $faker->randomNumber(3),
                'warranty' => $faker->randomNumber(3),
                'storage' => $faker->text('6'),
                'image' => '',
            ]);
        }
        for ($i = 0; $i <= 10; $i++) {
            $typeName = \App\Models\ProductType::find(2)->name;
            \App\Models\Product::create([
                'type_id' => '2',
                'subtype_id' => '4',
                'material_id' => random_int(1, 4),
                'actual_price' => '12000',
                'old_price' => '13000',
                'saving' => '1000',
                'name' => $typeName,
                'info' => $faker->text('50'),
                'description' => $faker->text,
                'specifications' => $faker->text('100'),
                'product_code' => $faker->text('5'),
                'size' => $faker->text('6'),
                'weight' => $faker->randomNumber(3),
                'warranty' => $faker->randomNumber(3),
                'storage' => $faker->text('6'),
                'image' => '',
            ]);
        }
        for ($i = 0; $i <= 10; $i++) {
            $typeName = \App\Models\ProductType::find(2)->name;
            \App\Models\Product::create([
                'type_id' => '2',
                'subtype_id' => '5',
                'material_id' => random_int(1, 4),
                'actual_price' => '12000',
                'old_price' => '13000',
                'saving' => '1000',
                'name' => $typeName,
                'info' => $faker->text('50'),
                'description' => $faker->text,
                'specifications' => $faker->text('100'),
                'product_code' => $faker->text('5'),
                'size' => $faker->text('6'),
                'weight' => $faker->randomNumber(3),
                'warranty' => $faker->randomNumber(3),
                'storage' => $faker->text('6'),
                'image' => '',
            ]);
        }
        for ($i = 0; $i <= 10; $i++) {
            $typeName = \App\Models\ProductType::find(2)->name;
            \App\Models\Product::create([
                'type_id' => '2',
                'subtype_id' => '6',
                'material_id' => random_int(1, 4),
                'actual_price' => '12000',
                'old_price' => '13000',
                'saving' => '1000',
                'name' => $typeName,
                'info' => $faker->text('50'),
                'description' => $faker->text,
                'specifications' => $faker->text('100'),
                'product_code' => $faker->text('5'),
                'size' => $faker->text('6'),
                'weight' => $faker->randomNumber(3),
                'warranty' => $faker->randomNumber(3),
                'storage' => $faker->text('6'),
                'image' => '',
            ]);
        }
        for ($i = 0; $i <= 10; $i++) {
            $typeName = \App\Models\ProductType::find(3)->name;
            \App\Models\Product::create([
                'type_id' => '3',
                'material_id' => random_int(1, 4),
                'actual_price' => '12000',
                'old_price' => '13000',
                'saving' => '1000',
                'name' => $typeName,
                'info' => $faker->text('50'),
                'description' => $faker->text,
                'specifications' => $faker->text('100'),
                'product_code' => $faker->text('5'),
                'size' => $faker->text('6'),
                'weight' => $faker->randomNumber(3),
                'warranty' => $faker->randomNumber(3),
                'storage' => $faker->text('6'),
                'image' => '',
            ]);
        }

        for ($i = 0; $i <= 10; $i++) {
            $typeName = \App\Models\ProductType::find(4)->name;
            \App\Models\Product::create([
                'type_id' => '4',
                'material_id' => random_int(1, 4),
                'actual_price' => '12000',
                'old_price' => '13000',
                'saving' => '1000',
                'name' => $typeName,
                'info' => $faker->text('50'),
                'description' => $faker->text,
                'specifications' => $faker->text('100'),
                'product_code' => $faker->text('5'),
                'size' => $faker->text('6'),
                'weight' => $faker->randomNumber(3),
                'warranty' => $faker->randomNumber(3),
                'storage' => $faker->text('6'),
                'image' => '',
            ]);
        }
        for ($i = 0; $i <= 10; $i++) {
            $typeName = \App\Models\ProductType::find(5)->name;
            \App\Models\Product::create([
                'type_id' => '5',
                'material_id' => random_int(1, 4),
                'actual_price' => '12000',
                'old_price' => '13000',
                'saving' => '1000',
                'name' => $typeName,
                'info' => $faker->text('50'),
                'description' => $faker->text,
                'specifications' => $faker->text('100'),
                'product_code' => $faker->text('5'),
                'size' => $faker->text('6'),
                'weight' => $faker->randomNumber(3),
                'warranty' => $faker->randomNumber(3),
                'storage' => $faker->text('6'),
                'image' => '',
            ]);
        }
        for ($i = 0; $i <= 10; $i++) {
            $typeName = \App\Models\ProductType::find(8)->name;
            \App\Models\Product::create([
                'type_id' => '8',
                'material_id' => random_int(1, 4),
                'actual_price' => '12000',
                'old_price' => '13000',
                'saving' => '1000',
                'name' => $typeName,
                'info' => $faker->text('50'),
                'description' => $faker->text,
                'specifications' => $faker->text('100'),
                'product_code' => $faker->text('5'),
                'size' => $faker->text('6'),
                'weight' => $faker->randomNumber(3),
                'warranty' => $faker->randomNumber(3),
                'storage' => $faker->text('6'),
                'image' => '',
            ]);
        }
        for ($i = 0; $i <= 10; $i++) {
            $typeName = \App\Models\ProductType::find(7)->name;
            \App\Models\Product::create([
                'type_id' => '7',
                'material_id' => random_int(1, 4),
                'actual_price' => '12000',
                'old_price' => '13000',
                'saving' => '1000',
                'name' => $typeName,
                'info' => $faker->text('50'),
                'description' => $faker->text,
                'specifications' => $faker->text('100'),
                'product_code' => $faker->text('5'),
                'size' => $faker->text('6'),
                'weight' => $faker->randomNumber(3),
                'warranty' => $faker->randomNumber(3),
                'storage' => $faker->text('6'),
                'image' => '',
            ]);
        }
        for ($i = 0; $i <= 10; $i++) {
            $typeName = \App\Models\ProductType::find(6);
            \App\Models\Product::create([
                'type_id' => '6',
                'subtype_id' => '7',
                'material_id' => random_int(1, 4),
                'actual_price' => '12000',
                'old_price' => '13000',
                'saving' => '1000',
                'name' => $typeName->name . '_' . ProductSubtype::find(7)->subtype_name,
                'info' => $faker->text('50'),
                'description' => $faker->text,
                'specifications' => $faker->text('100'),
                'product_code' => $faker->text('5'),
                'size' => $faker->text('6'),
                'weight' => $faker->randomNumber(3),
                'warranty' => $faker->randomNumber(3),
                'storage' => $faker->text('6'),
                'image' => '',
            ]);
        }
        for ($i = 0; $i <= 10; $i++) {
            $typeName = \App\Models\ProductType::find(6);
            \App\Models\Product::create([
                'type_id' => '6',
                'subtype_id' => '8',
                'material_id' => random_int(1, 4),
                'actual_price' => '12000',
                'old_price' => '13000',
                'saving' => '1000',
                'name' => $typeName->name . '_' . ProductSubtype::find(8)->subtype_name,
                'info' => $faker->text('50'),
                'description' => $faker->text,
                'specifications' => $faker->text('100'),
                'product_code' => $faker->text('5'),
                'size' => $faker->text('6'),
                'weight' => $faker->randomNumber(3),
                'warranty' => $faker->randomNumber(3),
                'storage' => $faker->text('6'),
                'image' => '',
            ]);
        }
        for ($i = 0; $i <= 10; $i++) {
            $typeName = \App\Models\ProductType::find(6);
            \App\Models\Product::create([
                'type_id' => '6',
                'subtype_id' => '9',
                'material_id' => random_int(1, 4),
                'actual_price' => '12000',
                'old_price' => '13000',
                'saving' => '1000',
                'name' => $typeName->name . '_' . ProductSubtype::find(9)->subtype_name,
                'info' => $faker->text('50'),
                'description' => $faker->text,
                'specifications' => $faker->text('100'),
                'product_code' => $faker->text('5'),
                'size' => $faker->text('6'),
                'weight' => $faker->randomNumber(3),
                'warranty' => $faker->randomNumber(3),
                'storage' => $faker->text('6'),
                'image' => '',
            ]);
        }
        for ($i = 0; $i <= 10; $i++) {
            $typeName = \App\Models\ProductType::find(6);
            \App\Models\Product::create([
                'type_id' => '6',
                'subtype_id' => '10',
                'material_id' => random_int(1, 4),
                'actual_price' => '12000',
                'old_price' => '13000',
                'saving' => '1000',
                'name' => $typeName->name . '_' . ProductSubtype::find(10)->subtype_name,
                'info' => $faker->text('50'),
                'description' => $faker->text,
                'specifications' => $faker->text('100'),
                'product_code' => $faker->text('5'),
                'size' => $faker->text('6'),
                'weight' => $faker->randomNumber(3),
                'warranty' => $faker->randomNumber(3),
                'storage' => $faker->text('6'),
                'image' => '',
            ]);
        }
    }
}
