<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable = ['tag'];
    public function BlogPosts()
    {
        return $this->belongsToMany('App\BlogPosts', 'Tags2_blogs', 'tagId', 'blogId');
    }
}
