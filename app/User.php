<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone','address','admin','sex'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function autos()
    {
        return $this->hasMany('App\Auto','user_id','id');
    }
    public function motos()
    {
        return $this->hasMany('App\Moto','user_id','id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'user_id','id');
    }
}
