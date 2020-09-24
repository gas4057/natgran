<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pass = \Illuminate\Support\Facades\Hash::make('password');
        \App\User::create([
            'email' => 'admin@mail.com',
            'password' => $pass,
            'name'=> 'admin'
        ]);
    }
}
