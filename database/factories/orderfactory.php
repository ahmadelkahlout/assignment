<?php

/** @var Factory $factory */

use App\order;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(order::class, function (Faker $faker) {
    return [
        'OrderID' => $faker->word,
        'productCode' => $faker->word,
        'Qty' => $faker->word,
        'PriceEach' => $faker->word,
    ];
});
