<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    protected $fillable = array('nom', 'description', 'prix', 'ref', 'stock', 'type', 'couleur', 'img');
    protected $table = 'product';
	
	use SoftDeletes;

    protected $dates = ['deleted_at', 'updated_at'];

    protected $SoftDeletes = true;

    public function carts(){
    	return $this->hasMany('App\Cart');
    }

    public function order()
    {
    	return $this->belongTo('App\Order');
    }
}
