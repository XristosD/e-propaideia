<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function profilePictureUrl()
    {
        return asset('profilePictures/'.$this->picture.'.png');
    }
}
