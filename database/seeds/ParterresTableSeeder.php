<?php

use App\Models\Modifier;
use Illuminate\Database\Seeder;

class ParterresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
       * modifier_id -> modifiers
       * type_id -> type_products
       * */
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '80',
            'width' => '40',
            'thickness' => '5',
            'thickness_size' => '5x8'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '80',
            'width' => '40',
            'thickness' => '9',
            'thickness_size' => '9x8'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '80',
            'width' => '50',
            'thickness' => '5',
            'thickness_size' => '5x8'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '80',
            'width' => '50',
            'thickness' => '9',
            'thickness_size' => '9x8'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '90',
            'width' => '50',
            'thickness' => '5',
            'thickness_size' => '5x8'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '90',
            'width' => '50',
            'thickness' => '9',
            'thickness_size' => '9x8'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '90',
            'width' => '60',
            'thickness' => '5',
            'thickness_size' => '5x8'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '90',
            'width' => '60',
            'thickness' => '9',
            'thickness_size' => '9x8'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '100',
            'width' => '50',
            'thickness' => '5',
            'thickness_size' => '5x8'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '100',
            'width' => '50',
            'thickness' => '9',
            'thickness_size' => '9x8'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '100',
            'width' => '60',
            'thickness' => '5',
            'thickness_size' => '5x8'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '100',
            'width' => '60',
            'thickness' => '9',
            'thickness_size' => '9x8'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '100',
            'width' => '70',
            'thickness' => '5',
            'thickness_size' => '5x8'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '100',
            'width' => '70',
            'thickness' => '9',
            'thickness_size' => '9x8'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '110',
            'width' => '70',
            'thickness' => '5',
            'thickness_size' => '5x8'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '110',
            'width' => '70',
            'thickness' => '9',
            'thickness_size' => '9x8'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '110',
            'width' => '80',
            'thickness' => '5',
            'thickness_size' => '5x8'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '110',
            'width' => '80',
            'thickness' => '9',
            'thickness_size' => '9x8'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '120',
            'width' => '70',
            'thickness' => '5',
            'thickness_size' => '5x8'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '120',
            'width' => '70',
            'thickness' => '9',
            'thickness_size' => '9x8'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '120',
            'width' => '80',
            'thickness' => '5',
            'thickness_size' => '5x8'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '120',
            'width' => '80',
            'thickness' => '9',
            'thickness_size' => '9x8'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '80',
            'width' => '40',
            'thickness' => '5',
            'thickness_size' => '8x5'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '80',
            'width' => '40',
            'thickness' => '9',
            'thickness_size' => '8x9'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '80',
            'width' => '50',
            'thickness' => '5',
            'thickness_size' => '8x5'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '80',
            'width' => '50',
            'thickness' => '9',
            'thickness_size' => '8x9'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '90',
            'width' => '50',
            'thickness' => '5',
            'thickness_size' => '8x5'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '90',
            'width' => '50',
            'thickness' => '9',
            'thickness_size' => '8x9'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '90',
            'width' => '60',
            'thickness' => '5',
            'thickness_size' => '8x5'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '90',
            'width' => '60',
            'thickness' => '9',
            'thickness_size' => '8x9'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '100',
            'width' => '50',
            'thickness' => '5',
            'thickness_size' => '8x5'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '100',
            'width' => '50',
            'thickness' => '9',
            'thickness_size' => '8x9'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '100',
            'width' => '60',
            'thickness' => '5',
            'thickness_size' => '8x5'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '100',
            'width' => '60',
            'thickness' => '9',
            'thickness_size' => '8x9'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '100',
            'width' => '70',
            'thickness' => '5',
            'thickness_size' => '8x5'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '100',
            'width' => '70',
            'thickness' => '9',
            'thickness_size' => '8x9'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '110',
            'width' => '70',
            'thickness' => '5',
            'thickness_size' => '8x5'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '110',
            'width' => '70',
            'thickness' => '9',
            'thickness_size' => '8x9'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '110',
            'width' => '80',
            'thickness' => '5',
            'thickness_size' => '8x5'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '110',
            'width' => '80',
            'thickness' => '9',
            'thickness_size' => '8x9'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '120',
            'width' => '70',
            'thickness' => '5',
            'thickness_size' => '8x5'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '120',
            'width' => '70',
            'thickness' => '9',
            'thickness_size' => '8x9'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '120',
            'width' => '80',
            'thickness' => '5',
            'thickness_size' => '8x5'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
        $parterres = Modifier::create([
            'type_id' => 3,
            'height' => '120',
            'width' => '80',
            'thickness' => '9',
            'thickness_size' => '8x9'
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $parterres->id,
            'product_type_id' => 1,
        ]);
    }
}
