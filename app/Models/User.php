<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'api_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'api_token',
    ];

    public function datas()
    {
        return $this->hasOne('App\Models\Data');
    }

    public function projects()
    {
        return $this->hasMany('App\Models\Project');
    }

    public function skills()
    {
        return $this->hasMany('App\Models\Skill');
    }

    public function trainings()
    {
        return $this->hasMany('App\Models\Training');
    }
}
