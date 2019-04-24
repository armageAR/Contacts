<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function getAgeAttribute()
    {
        return $this->dob->diffInYears(\Carbon\Carbon::now());
    }
}
