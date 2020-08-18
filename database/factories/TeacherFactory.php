<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Teacher;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {

    return [
        'first_name' => $faker->word,
        'last_name' => $faker->word,
        'gender' => $faker->word,
        'phone' => $faker->word,
        'country' => $faker->word,
        'status' => $faker->word,
        'user_id' => $faker->word,
        'image' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
