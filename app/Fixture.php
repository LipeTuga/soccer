<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    protected $dates = [
        'created_at',
        'updated_at',
        'event_date',
        'first_half_start_at',
        'second_half_start_at',
    ];
    public function league()
    {
        return $this->belongsTo(League::class);
    }

    public function homeTeam()
    {
        return $this->belongsTo(Team::class);
    }
    public function awayTeam()
    {
        return $this->belongsTo(Team::class);
    }

    public function prediction()
    {
        return $this->hasOne(Prediction::class);
    }

}
