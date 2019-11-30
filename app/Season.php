<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $casts = [
        'year'=>'int'
        ];

    public function leagues()
    {
        return $this->hasMany(League::class);
    }
}
