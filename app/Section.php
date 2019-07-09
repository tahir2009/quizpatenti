<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
}
