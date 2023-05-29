<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use App\Models\Contact;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //テーブル名は複数形、モデルの名前は単数系
        //Laravel側で判断して、モデルとマイグレーションを紐付ける
        DB::table('contacts')->insert([
            [
                'name'=>'村上',
                'mail'=>'murakami@gmail.com',
                'gender'=>0,
                'age'=>23,
                'message'=>'去年の三冠王',
            ],
            [
                'name'=>'アイズ',
                'mail'=>'Is@danmati.com',
                'gender'=>1,
                'age'=>18,
                'message'=>'テンペスト',
            ],
            [
                'name'=>'忍',
                'mail'=>'Sino@yahoo.com',
                'gender'=>2,
                'age'=>37,
                'message'=>'混一色コンサルタント',
            ]
        ]);
    }
}
