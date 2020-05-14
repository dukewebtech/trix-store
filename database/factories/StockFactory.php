<?php

/** @var Illuminate\Database\Eloquent\Factory $factory */

use App\Stock;
use Faker\Generator as Faker;

$factory->define(Stock::class, function (Faker $faker) {
    return [
        'item' => $faker->word(10),
        'costPerUnit' => $faker->randomNumber(5),
        'availableQuantity' => $faker->randomDigit(2),
        'minimumUnit' => $faker->numberBetween($min=1 , $max=3),
        'measurementId' => $faker->numberBetween($min=1 , $max=7)



    ];
});
