<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function getAgeAttribute()
    {
        return $this->birthdate->diffInYears(\Carbon\Carbon::now());
    }
}
