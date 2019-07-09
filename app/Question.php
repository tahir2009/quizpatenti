<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class)->withPivot('question');
    }

    public function words()
    {
        return $this->belongsToMany(Word::class);
    }

    public function result()
    {
        return $this->hasOne(Result::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'results');
    }
}
