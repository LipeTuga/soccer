<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Country::class, function (Faker $faker) {
    return [
        'api_id'=>rand(1, 100000),
        'code'=>$faker->countryCode,
        'name'=>$faker->country,
        'image'=>$faker->imageUrl()
    ];
});
