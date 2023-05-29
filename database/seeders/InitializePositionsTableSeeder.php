<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InitializePositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('positions')->insert(
            [
                ['name' => '二塁手'],
                ['name' => '遊撃手'],
                ['name' => '投手'],
                ['name' => '三塁手'],
                ['name' => '一塁手'],
            ]
        );
    }
}
