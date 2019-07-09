<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meaning extends Model
{
    public function languages()
    {
        return $this->belongsToMany(Language::class)->withPivot('meaning');
    }
}
