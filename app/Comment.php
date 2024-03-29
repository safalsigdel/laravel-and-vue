<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['body','commentable_id','commentable_type'];

    public function commentable()
    {
        return $this->morphTo();
    }
}
