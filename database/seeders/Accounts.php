<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class Accounts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            'id' => 1,
            'name' => 'Wallet',
            'currency' => 1,
            'balance' => 100.00,
            'init_amount' => 100.00,
            'notes' => '',
            'created_at' => now(),
            'updated_at' => now()
        ],);
    }
}
