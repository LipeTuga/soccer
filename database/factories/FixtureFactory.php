<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Fixture::class, function (Faker $faker) {
    return [
        'league_id'=>factory(\App\League::class)->create()->id,
        'api_id'=>rand(1, 10000),
        'event_date'=>$faker->date(),
        'first_half_start_at'=>$faker->date(),
        'second_half_start_at'=>$faker->date(),
        'round'=>$faker->word,
        'status'=>rand(1,5),
        'elapsed'=>rand(1,90),
        'venue'=>$faker->word,
        'home_team_id'=>factory(\App\Team::class)->create()->id,
        'away_team_id'=>factory(\App\Team::class)->create()->id,
        'goals_home_team'=>rand(0,6),
        'goals_away_team'=>rand(0,6),
        'score_half_time'=>rand(0,3).'-'.rand(0,3),
        'score_full_time'=>rand(0,3).'-'.rand(0,3),
        'score_extra_time'=>rand(0,3).'-'.rand(0,3),
        'score_penalties'=>rand(0,3).'-'.rand(0,3),
    ];
});
