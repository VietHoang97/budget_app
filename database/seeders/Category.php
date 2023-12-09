<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'name' => "Master Card",
            'icon' => 'https://webapp.fastbudget.app/static/icons/ic_party_hat.svg',
            'created_at' => now(),
            'updated_at' => now()

        ]);
    }
}
