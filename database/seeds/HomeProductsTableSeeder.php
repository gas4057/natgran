<?php

use Illuminate\Database\Seeder;

class HomeProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\HomeProduct::create([
            'tab_title' => 'Одиночные ',
            'product_id_1' => '24',
            'product_id_2' => '25',
            'product_id_3' => '26',
            'text_more' => 'Больше одиночных памятников',
        ]);
        \App\Models\HomeProduct::create([
            'tab_title' => 'двойные ',
            'product_id_1' => '45',
            'product_id_2' => '46',
            'product_id_3' => '47',
            'text_more' => 'Больше двойных памятников',
        ]);
        \App\Models\HomeProduct::create([
            'tab_title' => 'Кресты',
            'product_id_1' => '1',
            'product_id_2' => '2',
            'product_id_3' => '3',
            'text_more' => 'Больше крестов',
        ]);
        \App\Models\HomeProduct::create([
            'tab_title' => 'Плитка',
            'product_id_1' => '34',
            'product_id_2' => '35',
            'product_id_3' => '36',
            'text_more' => 'Больше плитки',
        ]);
        \App\Models\HomeProduct::create([
            'tab_title' => 'Украшения',
            'product_id_1' => '45',
            'product_id_2' => '46',
            'product_id_3' => '47',
            'text_more' => 'Больше украшений',
        ]);
        \App\Models\HomeProduct::create([
            'tab_title' => 'Вазы',
            'product_id_1' => '100',
            'product_id_2' => '101',
            'product_id_3' => '102',
            'text_more' => 'Больше ваз',
        ]);
        \App\Models\HomeProduct::create([
            'tab_title' => 'Лампады',
            'product_id_1' => '67',
            'product_id_2' => '68',
            'product_id_3' => '69',
            'text_more' => 'Больше лампад',
        ]);
    }
}
