<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->email,
        'join_date' => $faker->dateTimeBetween('-1 year', 'now')
    ];
});
