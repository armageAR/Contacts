<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $appends = ['age'];


    public function getAgeAttribute()
    {
        return \Carbon\Carbon::parse($this->birthdate)->diffInYears(\Carbon\Carbon::now());
    }
}
