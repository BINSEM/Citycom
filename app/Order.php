<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'order';

    public function user()
    {
        return $this->belongTo('App\User');
    }

    public function products()
    {
    	return $this->hasMany('App\Products');
    }
}
