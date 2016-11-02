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
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\TransactionType::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->name,
        'description' => $faker->sentence,
    ];
});


$factory->define(App\TransactionCategory::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->name,
        'description' => $faker->sentence,
        'transaction_type_id' => $faker->numberBetween(1,10),
    ];
});

$factory->define(App\Transaction::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->name,
        'description' => $faker->sentence,
        'transaction_category_id' => $faker->numberBetween(1,10),
        'amount' => $faker->randomFloat(0,null),
    ];
});
