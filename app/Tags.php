<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable = ['tag'];
    protected $table = 'tags';
    public function BlogPosts()
    {
        return $this->belongsToMany('App\BlogPosts', 'tags2_blogs', 'tagId', 'blogId');
    }
}
