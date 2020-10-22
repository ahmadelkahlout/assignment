<?php

/** @var Factory $factory */

use App\employee;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(employee::class, function (Faker $faker) {
    return [
        'Office' => $faker->word,
        'LastName' => $faker->lastName,
        'FirstName' => $faker->firstName,
        'phone' => $faker->phoneNumber,
        'Address1'=>$faker->address,
        'Address2'=>$faker->address,
        'City'=>$faker->city,
        'State'=>$faker->state,
        'PostalCode'=>$faker->postcode,
        'Country'=>$faker->country,
        'CreditLimit'=>$faker->creditCardNumber,


    ];
});
