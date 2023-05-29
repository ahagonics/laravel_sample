<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //テーブル名は複数形、モデルの名前は単数系
        //Laravel側で判断して、モデルとマイグレーションを紐付ける
        DB::table('users')->insert([
            [
                'name'=>'sails',
                'email'=>'sails@c.com',
                'password'=> Hash::make('passwords'),
            ]
        ]);
    }
}

