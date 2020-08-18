<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Classroom;
use Faker\Generator as Faker;

$factory->define(Classroom::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'code' => $faker->randomDigitNotNull,
        'description' => $faker->text,
        'status' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
