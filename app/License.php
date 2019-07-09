<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    protected $fillable = [
        'admin_id', 'package_id', 'license'
    ];

    public function school()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function student()
    {
        return $this->belongsToMany(Student::class)->withPivot('started_at');
    }
}
