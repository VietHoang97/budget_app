<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Budget extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('budgets')->insert([
            'id' => 1,
            'category_id' => 1,
            'account_id' => 1,
            'amount' => 1000,
            'init_amount' => 1000,
            'start_date' => now(),
            'end_date' => '2024-01-31 23:59:59',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
