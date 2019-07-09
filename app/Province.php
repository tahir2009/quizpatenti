<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public function regions()
    {
        return $this->hasMany(Region::class);
    }
}
