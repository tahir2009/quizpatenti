<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'description', 'duration', 'price'
    ];

    public function features()
    {
        return $this->belongsToMany(Feature::class);
    }
}
