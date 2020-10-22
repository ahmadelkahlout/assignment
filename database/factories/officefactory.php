<?php

/** @var Factory $factory */

use App\office;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(office::class, function (Faker $faker) {
    return [
        //'Code' => $faker->randomNumber(4)
        'City' => $faker->city,
        'Phone' => $faker->phoneNumber,
        'Address1' => $faker->address,
        'Address2' => $faker->address,
        'State' => $faker->state,
        'Country' => $faker->country,
        'PostalCode' => $faker->postcode,
        'Territory' => $faker->country,
    ];
});
