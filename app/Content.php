<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function content_images()
    {
        return $this->hasMany(ContentImage::class);
    }

    public function quiz_groups()
    {
        return $this->belongsToMany(QuizGroup::class);
    }

    public function language_content()
    {
        return $this->belongsToMany(Language::class)->withPivot('content');
    }
}
