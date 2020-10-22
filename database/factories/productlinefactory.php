<?php

/** @var Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(productlin::class, function (Faker $faker) {
    return [
        'DescInText' => $faker->word,
        'DescInHTML' => $faker->word,
        'Image' => $faker->word,

    ];
});
