<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Rank;
use Faker\Generator as Faker;

$factory->define(Rank::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence($nbWords = 4, $variableNbWords = true)
    ];
});
