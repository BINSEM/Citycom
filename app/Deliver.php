<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deliver extends Model
{
    //
    protected $fillable = ['type', 'description', 'montant', 'condition'];
}
