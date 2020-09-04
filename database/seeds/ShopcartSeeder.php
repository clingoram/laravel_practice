<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\shopcart;

class ShopcartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        shopcart::truncate();
        // to create fake data
        $faker = Faker::create();

        foreach(range(1,10) as $i){
            shopcart::create(
                [
                'price'=>$faker->randomDigit,
                'total_purchase_item'=>$faker->numberBetween($min = 2, $max = 100),
                'total_price'=>$faker->numberBetween($min = 50, $max = 1000),
                'merchandise_id'=>$i
                ]
            );
        }
    }
}
