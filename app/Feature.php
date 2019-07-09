<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = [
        'chapter_id', 'language_id', 'lesson_id', 'description', 'for'
    ];

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function packages()
    {
        return $this->belongsToMany(Feature::class);
    }
}
