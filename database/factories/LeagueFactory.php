<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\League;
use Faker\Generator as Faker;

$factory->define(League::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'season_id'=>factory(\App\Season::class)->create()->id,
    ];
});
