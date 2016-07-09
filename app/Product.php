<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    protected $fillable = array('id', 'nom', 'description', 'prix', 'ref', 'stock', 'categorie', 'img', 'deleted_at', 'updated_at');
    protected $table = 'product';
	
	use SoftDeletes;

    protected $dates = ['deleted_at', 'updated_at'];

    protected $SoftDeletes = true;
}
