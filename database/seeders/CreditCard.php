<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreditCard extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('credit_cards')->insert([
            'id' => 1,
            'account_id' => 1,
            'number' => 1000,
            'name' => "Master Card",
            'limit' => 100,
            'due_date' => now(),
            'interest_rate' => 1.5,
            'notes' => '',
            'created_at' => now(),
            'updated_at' => now()

        ]);
    }
}
