<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';

    public function products()
    {
    	return $this->hasMany('App\Product');
    }

    public function users()
    {
    	return $this->belongTo('App\User');
    }
}
