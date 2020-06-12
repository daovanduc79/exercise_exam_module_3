<?php

/** @var Factory $factory */

use App\Employee;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'employee_group' => $faker->title,
        'name' => $faker->name,
        'birthday' => $faker->date('Y-m-d'),
        'sex' => $faker->randomElement(['men','women','other']),
        'phone' => $faker->phoneNumber,
        'cmnd' => $faker->phoneNumber,
        'email' => $faker->email,
        'address' => $faker->address
    ];
});
