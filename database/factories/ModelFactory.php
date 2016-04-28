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

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'lastName' => $faker->lastName,
        'doc_id' => $faker->numberBetween($min = 1000000, $max = 99999999),
        'email' => $faker->email,        
        'password' => str_random(10),
        'role' => $faker->randomElement(['member', 'admin']),
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
		'start_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'end_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'imageQR' => $faker->imageUrl($width = 640, $height = 480),
        'codigo_pin' => $faker->numberBetween($min = 1000, $max = 9000) ,
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Company::class, function ($faker){
	return [
    	'name' => $faker->name,
    	'phone' => $faker->phoneNumber,
    	'address' => $faker->address,
    	'emailContact' => $faker->email,
    	'website' => $faker->companyEmail,
    	'country' => $faker->country,
    	'city' => $faker->city
	];
});
