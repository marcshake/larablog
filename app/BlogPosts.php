<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPosts extends Model
{
    public function authorName()
    {
        return $this->hasOne('App\User', 'id', 'author');
    }
}
