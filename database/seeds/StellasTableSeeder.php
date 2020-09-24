<?php

use Illuminate\Database\Seeder;
use App\Models\Modifier;

class StellasTableSeeder extends Seeder
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
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '80',
            'width' => '40',
            'thickness' => '5',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '80',
            'width' => '40',
            'thickness' => '8',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '80',
            'width' => '40',
            'thickness' => '10',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '80',
            'width' => '50',
            'thickness' => '5',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '80',
            'width' => '50',
            'thickness' => '8',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '80',
            'width' => '50',
            'thickness' => '10',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '90',
            'width' => '50',
            'thickness' => '5',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '90',
            'width' => '50',
            'thickness' => '8',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '90',
            'width' => '50',
            'thickness' => '10',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '90',
            'width' => '60',
            'thickness' => '5',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '90',
            'width' => '60',
            'thickness' => '8',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '90',
            'width' => '60',
            'thickness' => '10',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '100',
            'width' => '50',
            'thickness' => '5',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '100',
            'width' => '50',
            'thickness' => '8',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '100',
            'width' => '50',
            'thickness' => '10',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '100',
            'width' => '60',
            'thickness' => '5',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '100',
            'width' => '60',
            'thickness' => '8',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '100',
            'width' => '60',
            'thickness' => '10',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '100',
            'width' => '70',
            'thickness' => '5',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '100',
            'width' => '70',
            'thickness' => '8',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '100',
            'width' => '70',
            'thickness' => '10',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '110',
            'width' => '70',
            'thickness' => '5',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '110',
            'width' => '70',
            'thickness' => '8',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '110',
            'width' => '70',
            'thickness' => '10',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '110',
            'width' => '80',
            'thickness' => '5',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '110',
            'width' => '80',
            'thickness' => '8',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '110',
            'width' => '80',
            'thickness' => '10',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '120',
            'width' => '70',
            'thickness' => '5',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '120',
            'width' => '70',
            'thickness' => '8',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '120',
            'width' => '70',
            'thickness' => '10',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '120',
            'width' => '80',
            'thickness' => '5',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '120',
            'width' => '80',
            'thickness' => '8',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
        $stella = Modifier::create([
            'type_id' => 1,
            'height' => '120',
            'width' => '80',
            'thickness' => '10',
        ]);
        \Illuminate\Support\Facades\DB::table('modifier_product_type')->insert([
            'modifier_id' => $stella->id,
            'product_type_id' => 1,
        ]);
    }
}
