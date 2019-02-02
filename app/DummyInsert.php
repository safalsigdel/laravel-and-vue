<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DummyInsert extends Model
{
    protected $fillable =[
    	'name',
    	'email'
    ];

    public function insert($data)
    {
    	return $this->create($data);
    }
}
