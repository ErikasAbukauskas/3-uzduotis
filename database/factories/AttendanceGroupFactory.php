<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AttendanceGroup;
use Faker\Generator as Faker;

$factory->define(AttendanceGroup::class, function (Faker $faker) {
    return [
        'name' => $faker->jobTitle(),
        'description' => $faker->sentence(),
        'difficulty' => $faker->sentence(),
        'school_id' => rand(1,20)
    ];
});
