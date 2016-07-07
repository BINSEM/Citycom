<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
	use SoftDeletes;
    protected $table = 'product';

    protected $fillable = array('id', 'nom', 'description', 'prix', 'ref', 'stock', 'categorie', 'img');

    protected $dates = ['deleted_at'];

    protected $SoftDeletes = true;
}
