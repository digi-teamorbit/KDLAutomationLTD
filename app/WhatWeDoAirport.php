<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WhatWeDoAirport extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'what_we_do_airports';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'short_description', 'long_description', 'image'];

    
}
