<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InitializePlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('players')->insert(
            [
                ['name' => '坂本', 'team_id' => 1],
                ['name' => '佐藤', 'team_id' => 2],
                ['name' => '牧', 'team_id' => 3],
                ['name' => '岡本', 'team_id' => 1],
                ['name' => '大山', 'team_id' => 2],
                ['name' => '宮崎', 'team_id' => 3],
                ['name' => '戸郷', 'team_id' => 1],
                ['name' => '村上', 'team_id' => 2],
                ['name' => '今永', 'team_id' => 3],
            ]
        );
    }
}
