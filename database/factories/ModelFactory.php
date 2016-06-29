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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
	    'username' => $faker->userName,
		'email' => $faker->email,
		'password' => 'foo',
        'firstname' => $faker->firstName,
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Models\Account::class, function (Faker\Generator $faker) {
    return [
	    'username' => $faker->userName,
	    'password' => bcrypt('password'), 
		'email' => $faker->email,
        'firstname' => $faker->firstName,
        'usertype' => 'admin', 
        'staus' => 'active'
        'remember_token' => str_random(10),
    ];
});

