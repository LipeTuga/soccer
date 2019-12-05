<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prediction extends Model
{
    public function setDataAttribute($value)
    {
        $this->attributes['data'] = is_array($value) ? json_encode($value) : $value;
    }

    public function getDataAttribute($value)
    {
        return json_decode($value, true);
    }
}
