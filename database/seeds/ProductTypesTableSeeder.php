<?php

use Illuminate\Database\Seeder;

class ProductTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $type = \App\Models\ProductType::create([
            'name' => 'Одиночные',
            'info' => $faker->text('30'),
            'more_product' => 'Больше одиночных памятников'
        ]);
        \App\Models\RecommendedCart::create([
            'product_type_id' => $type->id,
            'title' => $faker->text(20),
            'content' => $faker->text(20),
        ]);
        $type->subtype()->create([
            'subtype_name' => 'Памятник простой',
            'short_desc' => 'Краткая инфа о Памятник простой',
            'full_name' => 'Памятник простой'
        ]);
        $type->subtype()->create([
            'full_name' => 'Памятник комплекс',
            'short_desc' => 'Краткая инфа о Комплекс',
            'subtype_name' => 'Комплекс'
        ]);
        $type->subtype()->create([
            'full_name' => 'Памятник саркофаг',
            'short_desc' => 'Краткая инфа о Саркофаг',
            'subtype_name' => 'Саркофаг'
        ]);
        $type = \App\Models\ProductType::create([
            'name' => 'Двойные',
            'info' => $faker->text('30'),
            'more_product' => 'Больше двойных памятников'
        ]);
         \App\Models\RecommendedCart::create([
            'product_type_id' => $type->id,
            'title' => $faker->text(20),
            'content' => $faker->text(20),
        ]);
        $type->subtype()->create([
            'subtype_name' => 'Памятник простой',
            'short_desc' => 'Краткая инфа о Памятник простой',
            'full_name' => 'Памятник простой'
        ]);
        $type->subtype()->create([
            'subtype_name' => 'Памятник простой',
            'short_desc' => 'Краткая инфа о Памятник простой',
            'full_name' => 'Памятник простой'
        ]);
        $type->subtype()->create([
            'subtype_name' => 'Памятник саркофаг',
            'short_desc' => 'Краткая инфа о Саркофаг',
            'full_name' => 'Саркофаг'
        ]);
        $type = \App\Models\ProductType::create([
            'name' => 'Уголки',
            'info' => $faker->text('30'),
            'more_product' => 'Больше уголков'
        ]);
        \App\Models\RecommendedCart::create([
            'product_type_id' => $type->id,
            'title' => $faker->text(20),
            'content' => $faker->text(20),
        ]);
        $type = \App\Models\ProductType::create([
            'name' => 'Ограды',
            'info' => $faker->text('30'),
            'more_product' => 'Больше оград'
        ]);
        \App\Models\RecommendedCart::create([
            'product_type_id' => $type->id,
            'title' => $faker->text(20),
            'content' => $faker->text(20),
        ]);
        $type = \App\Models\ProductType::create([
            'name' => 'Плитка',
            'info' => $faker->text('30'),
            'more_product' => 'Больше плитки'
        ]);
        \App\Models\RecommendedCart::create([
            'product_type_id' => $type->id,
            'title' => $faker->text(20),
            'content' => $faker->text(20),
        ]);

        $type = \App\Models\ProductType::create([
            'name' => 'Украшения',
            'info' => $faker->text('30'),
            'more_product' => 'Больше украшений'
        ]);
        \App\Models\RecommendedCart::create([
            'product_type_id' => $type->id,
            'title' => $faker->text(20),
            'content' => $faker->text(20),
        ]);
        $type->subtype()->create([
            'subtype_name' => 'Крестики',
            'short_desc' => 'Краткая инфа о Крестики',
        ]);
        $type->subtype()->create([
            'subtype_name' => 'Розочки',
            'short_desc' => 'Краткая инфа о Розочки',
        ]);
        $type->subtype()->create([
            'subtype_name' => 'Статуи',
            'short_desc' => 'Краткая инфа о Статуи',
        ]);
        $type->subtype()->create([
            'subtype_name' => 'Рамки для медальонов',
            'short_desc' => 'Краткая инфа о Рамки для медальонов',
        ]);
        $type = \App\Models\ProductType::create([
            'name' => 'Вазы',
            'info' => $faker->text('30'),
            'more_product' => 'Больше ваз'
        ]);
         \App\Models\RecommendedCart::create([
            'product_type_id' => $type->id,
            'title' => $faker->text(20),
            'content' => $faker->text(20),
        ]);
        $type = \App\Models\ProductType::create([
            'name' => 'Лампады',
            'info' => $faker->text('30'),
            'more_product' => 'Больше лампад'
        ]);
         \App\Models\RecommendedCart::create([
            'product_type_id' => $type->id,
            'title' => $faker->text(20),
            'content' => $faker->text(20),
        ]);
    }
}
