<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    public function meaning()
    {
        return $this->belongsTo(Meaning::class);
    }

    public function questions()
    {
        return $this->belongsToMany(Question::class);
    }
}
