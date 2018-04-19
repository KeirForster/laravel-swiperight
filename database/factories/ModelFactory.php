<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'email' => $faker->email,
        'linkedinurl' => $faker->url,
        'streetaddress' => $faker->streetAddress,
        'city' => $faker->numberBetween(1, 250000),
        'stateid' => $faker->numberBetween(1, 5000),
        'countryid' => $faker->numberBetween(1, 200),
        'postalzipcode' => $faker->postcode,
        'workphone' => $faker->phoneNumber,
        'workphoneextension' => $faker->numberBetween(0, 1000),
        'mobilephone' => $faker->unique()->phoneNumber,
        'homephone' => $faker->phoneNumber,
        'middlename' => $faker->firstName,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
