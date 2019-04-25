<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $appends = ['age'];
    protected $fillable = ['first_name', 'last_name', 'birthdate'];

    public function getAgeAttribute()
    {
        return \Carbon\Carbon::parse($this->birthdate)->diffInYears(\Carbon\Carbon::now());
    }
}
