<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
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
            DB::table('products')->insert([
                'name' => Str::random(10),
                'price' => rand(1, 100),
                'created_at' => now(),
                'updated_at' => now(),
                //'image_path' => ,
                'amount' => rand(1, 100)
            ]);
        }
    }
}
