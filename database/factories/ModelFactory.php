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
/**$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});*/

$factory->define(App\Personas::class, function (Faker\Generator $faker) {

    return [
        //'codigo' => $faker->name,
        'dni' => $faker->unique()->randomNumber($nbDigits = 8, $strict = false),
        'nombre' => $faker->name,
        'apll_paterno' => $faker->lastName,
        'apll_materno' => $faker->lastName,
        'f_nacimiento' => $faker->date($format = 'Ymd'),
        'sexo' => $faker->randomElement($array = array ('F','M')),
        
    ];
});
