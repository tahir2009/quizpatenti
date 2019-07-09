<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChapterVideo extends Model
{
    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
}
