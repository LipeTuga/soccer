<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Prediction::class, function (Faker $faker) {
    return [
        'type'=>1,
        'data'=>[$faker->word],
    ];
});
