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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

            // $table->increments('id');
            // $table->char('nom', 20);
            // $table->string('description');
            // $table->decimal('prix', 6, 2);
            // $table->bigInteger('ref');
            // $table->integer('stock');
            // $table->char('categorie', 20);
            // $table->char('img', 40);
            // $table->timestamps();
            // $table->softDeletes();