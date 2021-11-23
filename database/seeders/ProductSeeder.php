<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => "Calculadora CASIO",
            'quantity' => '7',
            'store_id' => 1,
            'updated_at' => '2021-11-23 04:32:39'
        ]);

        DB::table('products')->insert([
            'name' => "Engrapadora",
            'quantity' => '3',
            'store_id' => 2,
            'updated_at' => '2021-11-23 05:32:39'
        ]);
    }
}
