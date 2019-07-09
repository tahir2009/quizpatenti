<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    public function videos()
    {
        return $this->belongsToMany(Language::class, 'chapter_videos')->withPivot('video');
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
