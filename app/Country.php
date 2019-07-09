<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
    ];

    public function admins()
    {
        return $this->belongsToMany(Admin::class);
    }

    public function student()
    {
        return $this->hasMany(Student::class);
    }
    public function country_analyses()
    {
        return $this->hasMany(CountryAnalysis::class);

    }
}
