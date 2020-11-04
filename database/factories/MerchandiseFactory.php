<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->randomDigit,
        'image_path' => $faker->image($dir = '/tmp', $width = 640, $height = 480),
        'amount' => $faker->numberBetween($min = 10, $max = 1000)
    ];
});
