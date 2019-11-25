<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Country::class, function (Faker $faker) {
    return [
        'code'=>$faker->countryCode,
        'name'=>$faker->country,
        'image'=>$faker->imageUrl()
    ];
});
