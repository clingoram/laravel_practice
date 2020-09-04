<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Merchandise;

class MerchandiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // name of model
        merchandise::truncate();
        // to create fake data
        $faker = Faker::create();

        foreach(range(1,10) as $i){
            Merchandise::create(
                [
                'name'=>$faker->realText($maxNbChars = 15,$indexSize = 2),
                'price'=>$faker->randomDigit,
                'image_path'=>$faker->imageUrl($width = 640, $height = 480),
                'amount'=>$faker->randomDigit
                ]
            );
        }
    }
}
