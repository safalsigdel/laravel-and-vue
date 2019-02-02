<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
    		'name'

    ];

    public function seats()
    {
    	return $this->hasMany(Seat::class);
    }
}
