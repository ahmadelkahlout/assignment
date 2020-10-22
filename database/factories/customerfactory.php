<?php

/** @var Factory $factory */

use App\customer;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(customer::class, function (Faker $faker) {
    return [
        'Name' => $faker->word,
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
