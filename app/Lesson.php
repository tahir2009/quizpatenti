<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function contents()
    {
        return $this->hasMany(Content::class);
    }

    public function featured_lessons()
    {
        return $this->belongsToMany(Language::class, 'features')->withPivot('for');
    }
}
