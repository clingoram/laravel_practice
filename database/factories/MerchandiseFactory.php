<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Merchandise;
use Faker\Generator as Faker;

$factory->define(Merchandise::class, function (Faker $faker) {
    return [
        'id' => $faker->unique()->randomDigit,
        'name' => $faker->name,
        'price' => $faker->randomDigit,
        'image_path' => $faker->image($dir = '/tmp', $width = 640, $height = 480),
        'amount' => $faker->numberBetween($min = 10, $max = 1000)
    ];
});