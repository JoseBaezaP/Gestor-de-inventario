<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Jose Baeza",
            'email' => 'jose@evolution.com',
            'password' => Hash::make('adminEvolution135'),
            'role' => 1
        ]);
        DB::table('users')->insert([
            'name' => "Jose Empleado",
            'email' => 'empleado@evolution.com',
            'password' => Hash::make('empleadoEvolution135'),
            'role' => 0
        ]);
    }
}