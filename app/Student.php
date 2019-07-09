<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\Constraint\Count;

class Student extends Model
{
    protected $fillable = [
        'admin_id', 'country_id', 'first_name', 'last_name', 'email', 'phone', 'password', 'mac_address'
    ];

    protected $hidden = [
        'password'
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function licenses()
    {
        return $this->belongsToMany(License::class)->withPivot('started_at');
    }

    public function country()
    {
        return $this->belongsTo(Count::class);
    }

    public function result()
    {
        return $this->belongsToMany(Question::class, 'results')->withPivot('status');
    }

    public function exams()
    {
        return $this->hasMany(Exam::class);
    }

    public function slots()
    {
        return $this->belongsToMany(Slot::class);
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }
}
