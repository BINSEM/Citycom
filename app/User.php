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
    'name', 'email', 'password', 'prenom', 'adresse', 'code_postal', 'ville', 'tel', 'avatar_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    'password', 'remember_token',
    ];

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }

    public function avatar()
    {
        return $this->hasOne('App\Image', 'id', 'avatar_id');
    }
}
