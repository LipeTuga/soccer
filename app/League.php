<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    protected $dates=[
        'start_date',
        'end_date',
        'created_at',
        'updated_at',
    ];
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }
}
