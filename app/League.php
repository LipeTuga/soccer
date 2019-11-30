<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function season()
    {
        return $this->belongsTo(Season::class);
    }
}
