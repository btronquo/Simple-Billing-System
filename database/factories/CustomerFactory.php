<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {



    return [
        'type_id' => $faker->numberBetween(1,6),
        'name' => $faker->company,
        'address_line_1' => $faker->streetAddress,
        'address_line_2' => $faker->secondaryAddress,
        'zip' => $faker->postcode,
        'city' => $faker->city,
        'country' => $faker->country,
        'contact_firstname' => $faker->firstName,
        'contact_lastname' => $faker->lastName,
        'contact_mail' => $faker->safeEmail,
        'contact_phone' => $faker->phoneNumber
    ];
});
