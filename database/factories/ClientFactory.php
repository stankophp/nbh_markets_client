<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Client;
use App\Role;
use App\User;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'surname' => $faker->lastName,
        'email' => $faker->email,
        'date_of_birth' => $faker->date(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password,
        'phone_number' => $faker->phoneNumber,
        'address' => $faker->address,
        'country' => $faker->country,
        'trading_account_number' => $faker->numberBetween(),
        'balance' => $faker->numberBetween(0, 1000),
        'open_trades' => $faker->numberBetween(0, 1000),
        'closed_trades' => $faker->numberBetween(0, 1000),
        'role_id' => Role::ROLE_CLIENT,
        'user_id' => function () {
            return factory(User::class)->create();
        },
    ];
});
