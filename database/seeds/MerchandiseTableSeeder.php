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
        // DB::table('merchandises')->truncate();
        
        // 建 10 筆
        for ($i = 1; $i <= 10; $i++) {
            // 透過 DB class 建立資料
            DB::table('merchandises')->insert([
                'name' => Str::random(10),
                'price' => rand(1, 100),
                'image_path' => now(),
                'amount' => rand(1, 100)
            ]);
        }
    }
}