<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [
        'name', 'duration', 'duration', 'status', 'no_of_correct_questions', 'no_of_false_questions'
    ];
}
