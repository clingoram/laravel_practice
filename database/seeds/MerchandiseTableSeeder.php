<?php

use Illuminate\Database\Seeder;

class MerchandiseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // 建 10 筆
         for ($i = 1; $i <= 10; $i++) {
            // 透過 DB class 建立資料
            DB::table('merchandises')->insert([
                'name' => Str::random(10),
                'price' => Str::random(30),
                'image_path' => now(),
                'amount' => Str::random(2),
            ]);
        }
    }
}
