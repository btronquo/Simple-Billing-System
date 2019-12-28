<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reference;
use Faker\Generator as Faker;

$factory->define(Reference::class, function (Faker $faker) {
    return [
        'code' => $faker->numerify('####_###'),
        'short_description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'long_description' => $faker->sentence($nbWords = 12, $variableNbWords = true),
        'price' => $faker->randomNumber(2)
    ];
});
