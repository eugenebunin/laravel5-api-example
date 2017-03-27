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

    $email = 'me@me.com';

    return [
        'name' => $faker->name,
        'email' => $email,
        'password' => bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\OAuth\Client::class, function (Faker\Generator $faker) {

    return [
        'id' => 1,
        'name' => 'client1',
        'redirect' => 'http://localhost',
        'personal_access_client' => 0,
        'password_client' => 1,
        'revoked' => 0,
        'secret' => 'stz1CjgQBbMTGD9kLy2d0N1a2WJEJuN8sJiw4Wi3',
    ];
});
