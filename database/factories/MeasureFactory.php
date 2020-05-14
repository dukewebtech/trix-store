<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Measurement;
use Faker\Generator as Faker;

$factory->define(\App\Measurement::class, function (Faker $faker) {
    return [
        'name' => $faker->word(10),

        //
    ];
});
