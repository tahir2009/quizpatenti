<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
