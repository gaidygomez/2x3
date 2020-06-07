<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        "uuid" => Str::uuid(),
        "payment_date" => $faker->dateTimeInInterval('now', '+7 days'),
        "expired_at" => $faker->dateTimeBetween('now', '+1 year'),
        "status" => $faker->randomElement(['pending', 'paid']),
        "user_id" => rand(1, 30),
        "clp_usd" => rand(700, 900)
    ];
});
