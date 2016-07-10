<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'order';

    protected $fillable = ['user_id'];

    public function user()
    {
        return $this->belongTo('App\User');
    }
}
