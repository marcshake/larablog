<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable = ['name'];
    public function BlogPosts()
    {
        return $this->belongsToMany('App\BlogPosts', 'Category2_blogs', 'blogId', 'catId');
    }
}
