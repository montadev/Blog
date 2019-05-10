<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
class User extends Authenticatable
{
    use Notifiable;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','test'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


      

    public function posts()
    {
        return $this->hasMany('App\Post');
    }


  /*
     public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
*/
    public function role()
    {
        return $this->hasOne('App\Role');
    }

    public function likeposts()
    {
        return $this->belongsToMany('App\Post');
    }
}
