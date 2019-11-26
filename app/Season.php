<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $casts = [
        'year'=>'int'
        ];
}
