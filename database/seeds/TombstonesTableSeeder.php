<?php

use App\Models\Modifier;
use Illuminate\Database\Seeder;

class TombstonesTableSeeder extends Seeder
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
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '80',
            'width' => '40',
            'thickness' => '3',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '80',
            'width' => '40',
            'thickness' => '5',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '80',
            'width' => '40',
            'thickness' => '8',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '80',
            'width' => '50',
            'thickness' => '5',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '80',
            'width' => '50',
            'thickness' => '8',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '80',
            'width' => '50',
            'thickness' => '3',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '90',
            'width' => '50',
            'thickness' => '5',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '90',
            'width' => '50',
            'thickness' => '8',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '90',
            'width' => '50',
            'thickness' => '3',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '90',
            'width' => '60',
            'thickness' => '5',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '90',
            'width' => '60',
            'thickness' => '8',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '90',
            'width' => '60',
            'thickness' => '3',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '100',
            'width' => '50',
            'thickness' => '5',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '100',
            'width' => '50',
            'thickness' => '8',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '100',
            'width' => '50',
            'thickness' => '3',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '100',
            'width' => '60',
            'thickness' => '5',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '100',
            'width' => '60',
            'thickness' => '8',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '100',
            'width' => '60',
            'thickness' => '3',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '100',
            'width' => '70',
            'thickness' => '5',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '100',
            'width' => '70',
            'thickness' => '8',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '100',
            'width' => '70',
            'thickness' => '3',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '110',
            'width' => '70',
            'thickness' => '5',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '110',
            'width' => '70',
            'thickness' => '8',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '110',
            'width' => '70',
            'thickness' => '3',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '110',
            'width' => '80',
            'thickness' => '5',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '110',
            'width' => '80',
            'thickness' => '8',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '110',
            'width' => '80',
            'thickness' => '3',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '120',
            'width' => '70',
            'thickness' => '5',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '120',
            'width' => '70',
            'thickness' => '8',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '120',
            'width' => '70',
            'thickness' => '3',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '120',
            'width' => '80',
            'thickness' => '5',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '120',
            'width' => '80',
            'thickness' => '8',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
        $tombstones = Modifier::create([
            'type_id' => 2,
            'height' => '120',
            'width' => '80',
            'thickness' => '3',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $tombstones->id,
            'product_type_id' => 1,
        ]);
    }
}
