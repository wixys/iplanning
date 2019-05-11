<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Employee;
use App\User;
use App\Rank;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'rank_id' => function() {
        	return Rank::all()->random();
        },
        'user_id' => function() {
        	return User::all()->random();
        },
    ];
});
