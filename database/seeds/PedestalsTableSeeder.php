<?php

use Illuminate\Database\Seeder;
use App\Models\Modifier;

class PedestalsTableSeeder extends Seeder
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
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '40',
            'width' => '15',
            'thickness' => '10',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '40',
            'width' => '20',
            'thickness' => '10',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '40',
            'width' => '15',
            'thickness' => '12',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '40',
            'width' => '20',
            'thickness' => '12',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '40',
            'width' => '15',
            'thickness' => '15',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '40',
            'width' => '20',
            'thickness' => '15',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '40',
            'width' => '15',
            'thickness' => '20',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '40',
            'width' => '20',
            'thickness' => '20',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '50',
            'width' => '15',
            'thickness' => '10',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '50',
            'width' => '20',
            'thickness' => '10',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '50',
            'width' => '15',
            'thickness' => '12',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '50',
            'width' => '20',
            'thickness' => '12',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '50',
            'width' => '15',
            'thickness' => '15',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '50',
            'width' => '20',
            'thickness' => '15',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '50',
            'width' => '15',
            'thickness' => '20',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '50',
            'width' => '20',
            'thickness' => '20',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '60',
            'width' => '15',
            'thickness' => '10',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '60',
            'width' => '20',
            'thickness' => '10',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '60',
            'width' => '15',
            'thickness' => '12',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '60',
            'width' => '20',
            'thickness' => '12',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '60',
            'width' => '15',
            'thickness' => '15',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '60',
            'width' => '20',
            'thickness' => '15',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '60',
            'width' => '15',
            'thickness' => '20',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '60',
            'width' => '20',
            'thickness' => '20',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '70',
            'width' => '15',
            'thickness' => '10',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '70',
            'width' => '20',
            'thickness' => '10',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '70',
            'width' => '15',
            'thickness' => '12',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '70',
            'width' => '20',
            'thickness' => '12',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '70',
            'width' => '15',
            'thickness' => '15',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '70',
            'width' => '20',
            'thickness' => '15',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '70',
            'width' => '15',
            'thickness' => '20',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '70',
            'width' => '20',
            'thickness' => '20',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '80',
            'width' => '15',
            'thickness' => '10',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '80',
            'width' => '20',
            'thickness' => '10',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '80',
            'width' => '15',
            'thickness' => '12',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '80',
            'width' => '20',
            'thickness' => '12',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '80',
            'width' => '15',
            'thickness' => '15',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '80',
            'width' => '20',
            'thickness' => '15',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '80',
            'width' => '15',
            'thickness' => '20',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '80',
            'width' => '20',
            'thickness' => '20',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '90',
            'width' => '15',
            'thickness' => '10',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '90',
            'width' => '20',
            'thickness' => '10',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '90',
            'width' => '15',
            'thickness' => '12',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '90',
            'width' => '20',
            'thickness' => '12',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '90',
            'width' => '15',
            'thickness' => '15',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '90',
            'width' => '20',
            'thickness' => '15',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '90',
            'width' => '15',
            'thickness' => '20',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '90',
            'width' => '20',
            'thickness' => '20',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '100',
            'width' => '15',
            'thickness' => '10',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '100',
            'width' => '20',
            'thickness' => '10',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '100',
            'width' => '15',
            'thickness' => '12',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '100',
            'width' => '20',
            'thickness' => '12',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '100',
            'width' => '15',
            'thickness' => '15',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '100',
            'width' => '20',
            'thickness' => '15',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '100',
            'width' => '15',
            'thickness' => '20',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
        $pedestal = Modifier::create([
            'type_id' => 4,
            'height' => '100',
            'width' => '20',
            'thickness' => '20',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $pedestal->id,
            'product_type_id' => 1,
        ]);
    }
}
