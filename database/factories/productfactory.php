<?php

/** @var Factory $factory */

use App\product;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(product::class, function (Faker $faker) {
    return [
        'productive' => $faker->word,
        'Scale' => $faker->word,
        'vendor' => $faker->word,
        'QtyStock' => $faker->word,
        'amount' => $faker->word,
        'MSRP' => $faker->word,



    ];
});
