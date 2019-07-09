<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataLog extends Model
{
    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function video()
    {
        return $this->belongsTo(ChapterVideo::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function content()
    {
        return $this->belongsTo(Content::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function word()
    {
        return $this->belongsTo(Word::class);
    }
}
