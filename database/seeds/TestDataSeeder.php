<?php

use Illuminate\Database\Seeder;

class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // customersテーブルに登録するレコードを配列で定義する。
        DB::table('customers')->insert([
            [
                'name'           => '太郎くん',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            [
                'name'           => '次郎くん',
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
        ]);
    }
}
