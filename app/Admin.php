<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'region_id', 'name', 'email', 'password', 'image', 'phone', 'address', 'latitude', 'longitude', 'type', 'package', 'school_type', 'blocked', 'duration'
    ];

    protected $hidden = [
        'password'
    ];

    public function countries()
    {
        return $this->belongsToMany(Country::class);
    }

    public function licenses()
    {
        return $this->hasMany(License::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function nationalities()
    {
        return $this->belongsToMany(Country::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function timetable()
    {
        return $this->hasOne(Timetable::class);
    }

    public function conversations()
    {
        return $this->hasMany(Conversation::class);
    }
}
