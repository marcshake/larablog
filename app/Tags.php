<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    public function BlogPosts()
    {
        return $this->belongsToMany('App\BlogPosts', 'Tags2_blogs', 'tagId', 'blogId');
    }
}
