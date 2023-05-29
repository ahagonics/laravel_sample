<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CafeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //テーブル名は複数形、モデルの名前は単数系
        //Laravel側で判断して、モデルとマイグレーションを紐付ける
        DB::table('cafes')->insert([
            [
                'name'=>'ぼったくり',
                'prefecture'=>'沖縄県',
                'address'=>'那覇市の南',
                'review'=>2.4,
                'is_visible'=>true,
            ],
            [
                'name'=>'トントン',
                'prefecture'=>'群馬',
                'address'=>'群馬のどこか',
                'review'=>4.9,
                'is_visible'=>true,
            ],
            [
                'name'=>'ヤー',
                'prefecture'=>'東京',
                'address'=>'ゴールドジムの近く',
                'review'=>1.6,
                'is_visible'=>false,
            ]
        ]);
    }
}
