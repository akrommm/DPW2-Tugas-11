<?php

namespace App\Models\Traits\Attributes;

use Illuminate\Support\Str;

trait UserAttributes
{
    function getJeniskelaminStringAttribute()
    {
        return ($this->jenis_kelamin == 1) ? "laki-laki" : "perempuan";
    }

    function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    function setUsernameAttribute($value)
    {
        $this->attributes['username'] = strtolower($value);
    }
}
