<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function features()
    {
        return $this->hasMany(Feature::class);
    }
}
