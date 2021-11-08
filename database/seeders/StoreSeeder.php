<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
            'name' => "Local Sendero",
            'address' => 'Calle 14 #44 Col. Chuminopolis',
            'phone' => '9381330000',
            'employee_id' => 2,
        ]);
    }
}