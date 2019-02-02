<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable =['title','url'];

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}
