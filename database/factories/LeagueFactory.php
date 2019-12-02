<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\League;
use Faker\Generator as Faker;

$factory->define(League::class, function (Faker $faker) {
    return [
        'id'=>rand(1, 100000),
        'name'=>$faker->name,
        'season_id'=>factory(\App\Season::class)->create()->id,
        'start_date'=>$faker->date,
        'end_date'=>$faker->date,
        'logo'=>$faker->imageUrl(),
        'flag'=>$faker->imageUrl(),
    ];
});
