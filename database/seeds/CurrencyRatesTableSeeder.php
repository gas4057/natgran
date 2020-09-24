<?php

use Illuminate\Database\Seeder;

class CurrencyRatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\CurrencyRate::create([
            'rate' => 3
        ]);
    }
}
