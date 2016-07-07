<?php

namespace App;

use App\User;
use App\Product;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function imageable()
	{
		return $this->morphTo();
	}

	public function user()
	{
		return $this->belongsTo('App\User');
	}
}
