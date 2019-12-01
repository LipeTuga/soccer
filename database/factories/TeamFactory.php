<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        'country_id'=>factory(\App\Country::class)->create(),
        'api_id'=>rand(1, 100000),
        'name'=>$faker->name,
        'code'=>$faker->postcode,
        'logo'=>$faker->imageUrl(),
        'founded'=>$faker->year,
        'venue_name'=>$faker->name,
        'venue_surface'=>$faker->word,
        'venue_address'=>$faker->address,
        'venue_city'=>$faker->city,
        'venue_capacity'=>rand(10000, 999999),

    ];
});
