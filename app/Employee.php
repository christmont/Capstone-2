<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
     public function employeeclients()
    {
        return $this->hasMany(employeeclients::class);
    }
    
    public function position()
    {
        return $this->hasMany(Position::class);
    }
    public function schedules()
    {
        return $this->hasMany(schedule::class);
    }
     public function court()
    {
        return $this->hasMany(Court::class);
    }
}
