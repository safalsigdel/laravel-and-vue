<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
     protected $fillabel =[
    	'name',
    	'email',
    	'password',
    	'address',
    	'city',
    	'country'
    ];
}
