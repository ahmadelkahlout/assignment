<?php

/** @var Factory $factory */

use App\payment;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(payment::class, function (Faker $faker) {
    return [
        'CheckNum' => $faker->word,
        'CustomerID' => $faker->word,
        'Payment_Date' => $faker->word,
        'Amount' => $faker->word,
    ];
});
