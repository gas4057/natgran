<?php

use Illuminate\Database\Seeder;
use \App\Models\Employee;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            'name' => 'Аристарх Юрьевич',
            'position' => 'консьерж',
            'image' => 'image',
        ]);
        Employee::create([
            'name' => 'Аристарх Юрьевич',
            'position' => 'консьерж',
            'image' => 'image',
        ]);
        Employee::create([
            'name' => 'Аристарх Юрьевич',
            'position' => 'консьерж',
            'image' => 'image',
        ]);
        Employee::create([
            'name' => 'Аристарх Юрьевич',
            'position' => 'консьерж',
            'image' => 'image',
        ]);
    }
}
