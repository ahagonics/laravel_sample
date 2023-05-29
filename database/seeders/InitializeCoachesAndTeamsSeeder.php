<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InitializeCoachesAndTeamsSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* coaches テーブルに、監督のデータを追加する */
        DB::table('coaches')->insert(
            [
                ['name' => '原監督'],
                ['name' => '岡田監督'],
                ['name' => '三浦監督'],
            ]
        );

        /* teams テーブルに、チームのデータを追加する */
        DB::table('teams')->insert(
            [
                ['name' => '巨人', 'coach_id' => 1],
                ['name' => '阪神', 'coach_id' => 2],
                ['name' => 'DeNA', 'coach_id' => 3],

                /* チームD, チームEはcoachテーブルとの関連付けをしない(外部キーcoach_id をnullにしておく) */
                ['name' => '広島', 'coach_id' => null],
                ['name' => 'ヤクルト', 'coach_id' => null],
            ]
        );
    }
}
