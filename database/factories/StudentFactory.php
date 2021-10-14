<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName(),
        'surname' => $faker->name(),
        'group_id' => rand(1,15),
        'image_url' => $faker->url()
    ];
});
