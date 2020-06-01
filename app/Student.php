<?php

namespace App;

use App\profile;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use Notifiable;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password', 'supervisor_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function supervisor()
    {
        return $this->belongsTo(Supervisor::class);
    }

    public function profile()
    {
        return $this->hasOne(profile::class);
    }

    public function progress()
    {
        return $this->hasOne(progress::class);
    }

    public function Results()
    {
        return $this->hasMany(Result::class);
    }

    public function initProfile()
    {
        $profile = new profile();
        $this->profile()->save($profile);
    }

    public function initProgress()
    {
        if($this->progress){
            return ;
        }
        $progress = new progress();
        $this->progress()->save($progress);
        $this->save();
    }
}
